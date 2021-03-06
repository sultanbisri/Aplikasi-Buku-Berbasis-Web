<?php 

    if( isset($_POST['btn_tambah'])) {
        
        $judul     = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit  = $_POST['penerbit'];
        $tahun     = $_POST['tahun'];

        $buku =  new Library();
        $tambah = $buku->tambahBuku($judul, $pengarang, $penerbit, $tahun);

        if($tambah = 'Success') {
            
            header('Location:index.php');

        } else {
            echo 'Error';
        }

    }

?>