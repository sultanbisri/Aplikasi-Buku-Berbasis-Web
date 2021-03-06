<?php 

    require 'library.php';

    if( isset($_GET['hapus']) ) {

        $buku = new Library();
        $id = $_GET['hapus'];
        $hapus = $buku->hapusBuku($id);

        if( $hapus = 'Success') {

            header('Location:index.php');
        
        } else {

            echo 'Error';
        }


    }

?>