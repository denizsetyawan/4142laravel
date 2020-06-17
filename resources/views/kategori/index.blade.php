<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h2>Daftar Kategori</h2>
            <a href="/tambah-kategori" class="ml-auto">
                <button type="button" class="btn btn-primary">Tambah Kategori</button>
            </a>
        </div><br>

        @if (Session()->has('status'))
        <br>
        <div class="alert alert-success" role="alert">
            {{ session()->get('status') }}
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                @forelse ($kategori as $k)
                <tr>
                    <th scope="row">{{ $k->id }}</th>
                    <td>{{ $k->nama_kategori }}</td>
                    <td>
                        <a href="/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @empty
                <td colspan="3"><center>Kategori Kosong</center></td>
                @endforelse
            </table>
        </div>
    </div>
</body>

</html>
