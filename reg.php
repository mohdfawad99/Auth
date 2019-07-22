<?php
include_once('db.php');
if(!$conn){
    echo "Not Connected";
}



$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$submit = mysqli_query($conn,"INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$pass');");

if($submit){
    echo "Done";
}else{
    echo "Error";
}



?>