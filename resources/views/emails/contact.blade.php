<!DOCTYPE html>
<html>

<head>
    <title>Pesan dari Website</title>
</head>

<body>
    <h2>Pesan Baru dari Website</h2>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Pesan:</strong> {{ $data['message'] }}</p>
</body>

</html>
