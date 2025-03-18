<?php

namespace App\Mail;

use App\Models\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Contracts\Queue\ShouldQueue;

class TiketMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        // Generate PDF
        $pdf = PDF::loadView('pdf.tiket', ['order' => $this->order]);

        return $this->subject('Tiket Wisata Anda')
            ->view('emails.tiket') // Email template
            ->attachData($pdf->output(), "Tiket-{$this->order->id}.pdf", [
                'mime' => 'application/pdf',
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Tiket Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.tiket',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
