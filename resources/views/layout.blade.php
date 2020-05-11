<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">My Blog</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/home">Home</a>
      <a class="p-2 text-dark" href="/about">About</a>
      <a class="p-2 text-dark" href="/contact">Contact</a>

    </nav>

  </div>
  <div class="container">
   <div class="row">

    <div class="col">
     <div class="card mb-1 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Kategori</h4>
      </div>
      <div class="card-body">

        <ul>
          <li>Anak-anak</li>
          <li>Dewasa</li>
          <li>Wanita</li>
          <li>Laki-laki</li>
        </ul>

      </div>
    </div>
  </div>
@yield('content')
</div>
<footer class="pt-4 my-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
      <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
    </div>


  </div>
</footer>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap/jquery/jquery.min.js"></script>
<script src="bootstrap/jquery/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>