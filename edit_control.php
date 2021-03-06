<?php 

    if( isset($_GET['kode']) ) {

        $buku = new Library();
        $book = $buku->editBuku($_GET['kode']);
        $edit = $book->fetch(PDO::FETCH_OBJ);
        
    } else {

        echo "Error";
    
    }

    if( isset($_POST['btn_edit']) ) {

        $id = $_GET['kode'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        $update = $buku->updateBuku($id, $judul, $pengarang, $penerbit, $tahun);

        if( $update == 'Success' ) {

            header('Location:index.php');
            
        } else {

            echo 'Error';
        }

    }

?>