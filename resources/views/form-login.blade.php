<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Login</h1>

        @if (Session()->has('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('pesan') }}
        </div>
        @endif

        <form action="/proses-login" method="post">
           @csrf
           
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
                @error('username')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!--
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
-->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>
