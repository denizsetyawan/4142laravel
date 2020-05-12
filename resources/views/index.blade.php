<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Data Product</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="mr-auto">Tabel Product</h2>

                @if (Session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                </div>
                @endif
                
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <a href="{{url('/create-product')}}" class="btn btn-primary">
                        Tambah Product
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Product</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$product->nama_produk}}</td>
                            <td>{{$product->kategori_produk}}</td>
                            <td>{{$product->harga_produk}}</td>
                            <td>{{$product->stok_produk}}</td>
                            <td>{{$product->kondisi_produk}}</td>
                            <td><a href="{{ url('/show-product/'.$product->id) }}" class="btn btn-primary">
                                    Detail</a>
                                <a href="{{ url('/edit-product/'.$product->id) }}" class="btn btn-warning">
                                    Edit</a>
                                <a href="{{ url('/delete-product/'.$product->id) }}" class="btn btn-danger">
                                    Hapus</a></td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data product</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>