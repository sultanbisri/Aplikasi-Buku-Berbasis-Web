<?php 

    require 'library.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Daftar Buku Tersedia</title>
</head>
<body>
    
    <div class="container">

        <h2><center> Daftar Buku Tersedia </center></h2>

        <a href="tambah.php" class="btn btn-primary btn-sm">Tambah Data Buku</a>

        <table class="table table-bordered table-hover" style="margin-top: 20px;">
            <thead>
                <th> Kode Buku </th>
                <th> Judul Buku </th>
                <th> Pengarang </th>
                <th> Penerbit </th>
                <th> Tahun </th>
                <th> Action </th>
                
            </thead>

            <?php 

                $buku = new Library();

                $liat = $buku->liatBuku();
                while( $data = $liat->fetch(PDO::FETCH_OBJ)) {

                    echo "

                        <tr>
                            <td align='center'>$data->id</td>
                            <td>$data->judul</td>
                            <td>$data->pengarang</td>
                            <td>$data->penerbit</td>
                            <td>$data->tahun</td>
                            <td>
                                <a href='edit.php?kode=$data->id' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?hapus=$data->id' class='btn btn-danger btn-sm' >Hapus</a>
                            </td>
                        </tr>
                    ";
                }

            ?>

        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body> 
</html>