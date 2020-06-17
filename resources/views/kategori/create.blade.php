<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Kategori</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h2>Buat Kategori</h2>
            <a href="/kategori" class="ml-auto">
                <button type="button" class="btn btn-primary">Daftar Kategori</button>
            </a>
        </div>
        <hr>
        <form action="/proses-buat-kategori" method="post">
            @csrf

            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
                @error('nama_kategori')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Buat Kategori</button>
        </form>
    </div>
</body>

</html>
