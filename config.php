<?php
    $host="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="xyz";
     
     $conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
     if(!$conn){
        echo "connection failed";

     }
?>