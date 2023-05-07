<?php
$conn = new mysqli('localhost','root','root','win');

if(!$conn){
    echo 'ERROR: ' . mysqli_connect_error();
}
?>