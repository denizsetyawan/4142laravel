<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Hello World!</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <ul>
                            @foreach ($siswa as $val)
                        <li>{{$val}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap/jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="boostrap/jquery/popper.min.js"></script>
    </body>
</html>