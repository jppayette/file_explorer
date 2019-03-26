<?php
/* **************************************************
Upload de fichier
*/
if (isset ( $_GET['directory'] )){
    $directory = '.';
    $directory = $_GET['directory'];
} else {
    $directory = 'upload/';
}

if(  isset($_FILES['userfile'])   ){
    $directory = $directory .'/'. basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $directory)) {
        include('themes/alert.php');
    } else {
    echo "ERREUR";
    }
}

?>
