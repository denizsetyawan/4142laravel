<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Menampilkan data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/jquery/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->isi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>