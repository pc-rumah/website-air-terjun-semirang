<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIKET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body>
    <div class="container">
        <h1 class="my-3">TIKET</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('tiket.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pesanan Selesai</h5>
                <p class="card-text">Detail Pesanan</p>
                <table>
                    <tr>
                        <td>nama</td>
                        <td> : {{ $order->name }}</td>
                    </tr>

                    <tr>
                        <td>no hp</td>
                        <td> : {{ $order->no_telp }}</td>
                    </tr>

                    <tr>
                        <td>alamat</td>
                        <td> : {{ $order->address }}</td>
                    </tr>

                    <tr>
                        <td>alamat</td>
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

                    <tr>
                        <td>Status</td>
                        <td> : {{ $order->status }}</td>
                    </tr>

                    <a href="/" class="btn btn-primary">Kembali ke Landing Page</a>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
