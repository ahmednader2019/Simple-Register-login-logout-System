<?php

require "libP.php";
$name = $_POST['username'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$confirm_pass =  $_POST['confirm_pass'];
$user_role =  $_POST['user_role'];
if($password!=$confirm_pass){
    echo "The 2 Passwords doesn't match each other ";
    header('LOCATION:registerP.html');
}
else{
$res = register($name,$email,$password,$user_role);

if($res == true ){
    echo "user added successfully";
    header('LOCATION : registerP.html');
}
else{
    "Invalid Operation ";
}
}