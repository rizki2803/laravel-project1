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
    <div class="container mt-12">
        <form action="" method="post" action="{{ route('guest.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            <label>Kategori Tamu :</label><br>
            <select>
                 @foreach($data as $row)
                 <label>Kategori Tamu</label>
            <option></option>
                @endforeach
            </select>
            
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" id="name">
            </div>

            <div class="form-group">
                <label>Telp</label>
                <input type="text" class="form-control" name="tlp" id="tlp">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>

            <div class="form-group">
                <label>Nama Instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi">
            </div>

            <div class="form-group">
                <label>Tujuan</label>
                <input type="text" class="form-control" name="tujuan" id="tujuan">
            </div>

            <div class="form-group">
                <label>Nama PIC</label>
                <input type="text" class="form-control" name="nama_pic" id="nama_pic">
            </div>

            <div class="form-group">
                <label>Waktu yang di janjikan</label>
                <input type="text" class="form-control" name="jam_janji" id="jam_janji">
            </div>

            <div class="form-group">
                <label>Detail Tujuan</label>
                <input type="text" class="form-control" name="detail_tujuan" id="detail_tujuan">
            </div>

            <div class="form-group">
                <label>Jam Kedatangan</label>
                <input type="text" class="form-control" name="jam_kedatangan" id="jam_kedatangan">
            </div>

            <div class="form-group">
                <label>Suhu Tubuh</label>
                <input type="text" class="form-control" name="Suhu_Tubuh" id="Suhu_Tubuh">
            </div>

            <div class="form-group">
                        <label for="kondisi tubuh">kondisi tubuh :</label> <br>
                    <div class="form-check form-check-inline">
                        <label for="kondisi tubuh">
                            <input type="radio" name="kondisi tubuh1" value="sehat" id="survey1" selected>Sehat
                            <input type="radio" name="kondisi tubuh1" value="tidak" id="survey1">Tidak
                        <br>
                        <input type="radio" name="kondisi tubuh2" value="batuk" id="survey2" selected>Batuk
                        <input type="radio" name="kondisi tubuh2" value="tidak" id="survey2">Tidak
                        <br>
                        <input type="radio" name="kondisi tubuh3" value="Sakit Tenggorokan" id="survey3" selected>Sakit Tenggorokan
                            <input type="radio" name="kondisi tubuh3" value="tidak" id="survey3">Tidak
                        </label>
                        </div>            
            <div class="form-group">
                        <label for="Indra Penciuman">Indra Penciuman :</label> <br>
                    <div class="form-check form-check-inline">
                        <label for="indra_penciuman">
                            <input type="radio" name="Indra Penciuman" value="normal" id="survey4" selected>Normal
                            <input type="radio" name="Indra Penciuman " value="tidak" id="survey4">Tidak
                            </label>
                        </div>

           

           

            

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>