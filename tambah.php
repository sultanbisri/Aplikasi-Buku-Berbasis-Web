<?php 

    require 'library.php';
    require 'tambah_control.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tambah Buku</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">

                    <h2> Tambah Buku </h2>

                    <div class="form-group">
                        <label for="judul"> Judul Buku </label>
                        <input type="text" name="judul" id="judul" class="form-control" autocomplete="off" placeholder="Judul">
                    </div>

                    <div class="form-group">
                        <label for="pengarang"> Pengarang Buku </label>
                        <input type="text" name="pengarang" id="pengarang" class="form-control" autocomplete="off" placeholder="Pengarang">
                    </div>

                    <div class="form-group">
                        <label for="penerbit"> Nama Penerbit </label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control" autocomplete="off" placeholder="Penerbit">
                    </div>

                    <div class="form-group">
                        <label for="tahun"> Tahun Diterbitkan </label>
                        <input type="text" name="tahun" id="tahun" class="form-control" autocomplete="off" placeholder="Tahun">  
                    </div>

                    <button type="submit" value="Tambah Data" name="btn_tambah" class="btn btn-info"
                        onclick="return confirm('Apakah Yakin Ingin Menambahkan Data ?');">
                        Tambah Data Buku
                    </button>

                    <a href="index.php" class="btn btn-danger" >Batal</a>
                </form>
            </div>
        </div>
    </div>
    

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>