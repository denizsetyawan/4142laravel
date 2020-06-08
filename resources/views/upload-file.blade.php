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
                <input name="file" type="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>

</html>
