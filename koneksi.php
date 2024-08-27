<?php
$conn=mysqli_connect('localhost','root','','perpustakaan');
if (mysqli_connect_error()){
    printf(mysqli_connect_error());
    exit();
}
?>