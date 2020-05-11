<html>
    <head>
        <title>Detail Product</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <h1 class="h2">Nama Produk : {{ $product->nama_produk }}</h1>
            </div>
            <hr>
            <ul>
                <li>Kategori : {{ $product->kategori_produk }}</li>
                <li>Harga : {{ $product->harga_produk }}</li>
                <li>Stok : {{ $product->stok_produk }}</li>
                <li>Kondisi : {{ $product->kondisi_produk }}</li>
                <li>Deskripsi : {{ $product->deskripsi_produk }}</li>
            </ul>
        </div>
    </body>
</html>