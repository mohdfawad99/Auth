<?php
session_start();
include_once('db.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$data=mysqli_query($conn,"SELECT * FROM login WHERE email = '$email' AND  password = '$pass';");

// if(mysqli_affected_rows($conn)){
//     echo "Login successfully";
// }else{
//     echo "Login failed";
// }

$data_array = mysqli_fetch_array($data);


if($email == $data_array['email'] && $pass == $data_array['password']){
    $_SESSION['fawad']=1;
    header('location:admin.php');
}else{
    echo "Login failed";
}




?>