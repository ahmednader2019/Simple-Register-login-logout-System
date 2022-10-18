<?php
session_start();
require "libP.php";
if(!empty($_SESSION['user'])){
    header('LOCATION:diplomaP.php');
}
if(isset($_POST['email'])){
    $email = $_POST['email'] ;
    $password = $_POST['password'];
    $userdata = login($email,$password);
    if(!empty($userdata)){
        $_SESSION['user'] = $userdata ;
        header('LOCATION: diplomaP.php');
    }
    else
    echo " You are not allowed to enter ";

}

include "loginP.html";