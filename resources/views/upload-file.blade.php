<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1>Upload File</h1>

        <form action="/file-upload" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="Upload File">Upload File</label>
                <input name="berkas" type="file" class="form-control-file">
                @error('berkas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Caption</label>
                <input name="caption" type="text" class="form-control" placeholder="Caption">
                @error('caption')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        @if (Session()->has('status'))
        <br>
        <div class="alert alert-success" role="alert">
            {{ session()->get('status') }}
        </div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produk as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>
                            <img src="{{ url('/foto/'.$p->berkas) }}" width="100px" alt="Gambar">
                        </td>
                        <td>{{ $p->caption }}</td>
                        <td></td>
                    </tr>
                    @empty
                    <td colspan="4">
                        <center>Tidak ada produk</center>
                    </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
