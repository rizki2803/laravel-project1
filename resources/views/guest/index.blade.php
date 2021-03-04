<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">
        <form action="" method="post" action="{{ route('guest.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>nama</label>
                <input type="text" class="form-control" name="nama" id="name">
            </div>

            <div class="form-group">
                <label>tlp</label>
                <input type="text" class="form-control" name="tlp" id="tlp">
            </div>

            <div class="form-group">
                <label>alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>

            <div class="form-group">
                <label>instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi">
            </div>

            <div class="form-group">
                <label>tujuan</label>
                <textarea class="form-control" name="tujuan" id="tujuan" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>jam janji</label>
                <input type="text" class="form-control" name="jam_janji" id="jam_janji">
            </div>

            <div class="form-group">
                <label>instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi">
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>