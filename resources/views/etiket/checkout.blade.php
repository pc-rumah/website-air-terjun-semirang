<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <title>Checkout Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3">Tiket</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('tiket.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Detail Pembelian</h5>
                <p class="card-text">Tiket Masuk</p>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td> : {{ $order->name }}</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td> : {{ $order->address }}</td>
                    </tr>

                    <tr>
                        <td>No Telp</td>
                        <td> : {{ $order->no_telp }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td> : {{ $order->email }}</td>
                    </tr>

                    <tr>
                        <td>QTY</td>
                        <td> : {{ $order->qty }}</td>
                    </tr>

                    <tr>
                        <td>Total Harga</td>
                        <td> : {{ $order->total_price }}</td>
                    </tr>
                </table>
                <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    // alert("payment success!");
                    window.location.href = '/invoice/{{ $order->id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    alert("waiting your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                }
            });
        });
    </script>
</body>

</html>
