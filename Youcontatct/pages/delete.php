<?php
    require 'connectDB.php';
    $id=$_GET['id'];
    $requete = "DELETE FROM contacts WHERE id = $id";
    $query = mysqli_query($connect, $requete);
    if(isset($query)){
        echo 'finally done';
    }else {
        echo'NOOO';
    }
    header("location:viewcontact.php" )
?>