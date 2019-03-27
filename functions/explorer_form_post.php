<?php
/* **************************************************
Fait l'affichage dans le tableau HTML des différents fichiers 
et répetoire du répertoire spécifié depuis l'URL
*/

// Vérifie si le repertoire par defaut existe, sinon lui assigne le "."
if (isset ( $_POST['directory'] )){
    $directory = '.';
    $directory = $_POST['directory'];
} else {
    $directory = '.';
}

foreach (new DirectoryIterator($directory) as $fileInfo) {
    $fileName = $fileInfo->getFilename();
    
    if ( ($fileName == '.') || ($fileName == '.git') ) continue;
    
    echo "<tr>";
    
    if ( $fileInfo->isDir()){   // c'est un dossier
        echo "<td>
        <i class='fa fa-folder' aria-hidden='true'></i>
        <a href='?directory=$directory/$fileName'>" . $fileName . "</a>
        </td>";
    } else {    // c'est un fichier
        echo "<td>
        <i class='fa fa-file' aria-hidden='true'></i>
        <a href='" . $directory  . '/' . $fileName . "'>" . $fileName . "</a>
        </td>";
    }   
    
    // ces éléments sont communs aux deux conditions
    if ($fileName == '..'){
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
    } else {
        echo "<td>" . formatSizeUnits( $fileInfo->getSize() ) . "</td>";
        echo "<td>" .  $fileInfo->getType()  . "</td>";
        echo "<td>" .  date('Y-m-d H:i:s', $fileInfo->getMTime())  . "</td>";
        echo "<td><button type='button' class='btn btn-secondary suppression' data-file='" . realpath($directory  . '/' .$fileName) . "'>Supprimer</button> </td>";
    }
    
    echo "</tr>";
}   

?>


