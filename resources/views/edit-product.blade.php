<html>

<head>
    <title>Form Edit Produk</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="col-md-6">
            <h1>Form Edit Produk</h1>
            <hr>
            <form action="{{ url('/update-product') }}" method="post">
               @csrf
               
                <div class="form-group">
                    <label for="Nama Produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="{{ $product->nama_produk }}">
                    @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Kategori Produk">Kategori</label>
                    <select class="form-control" name="kategori_produk">
                        <option value="Elektronik"
                        @if($product->kategori=='Elektronik')
                        selected
                        @endif
                        >Elektronik</option>
                        <option value="Fashion"
                        @if($product->kategori=="Fashion")
                        selected
                        @endif
                        >Fashion</option>
                        <option value="Komputer"
                        @if($product->kategori=='Komputer')
                        selected
                        @endif
                        >Komputer</option>
                    </select>
                    @error('kategori_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Harga Produk">Harga Produk</label>
                    <input type="text" class="form-control" name="harga_produk" placeholder="Harga Produk" value="{{ $product->harga_produk }}">
                    @error('harga_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Stok Produk">Stok Produk</label>
                    <input type="text" class="form-control" name="stok_produk" placeholder="Stok Produk" value="{{ $product->stok_produk }}">
                    @error('stok_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Kondisi Produk">Kondisi Produk</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kondisi_produk" id="inlineRadio1" value="Baru" checked>
                        <label class="form-check-label" for="inlineRadio1">Baru</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kondisi_produk" id="inlineRadio2" value="Bekas">
                        <label class="form-check-label" for="inlineRadio2">Bekas</label>
                    </div>
                    @error('kondisi_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Deskripsi Produk">Deskripsi Produk</label>
                    <textarea name="deskripsi_produk" class="form-control" placeholder="Deskripsi Produk">{{ $product->deskripsi_produk }}</textarea>
                    @error('deskripsi_produk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>