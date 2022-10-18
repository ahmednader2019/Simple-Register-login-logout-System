<?php
session_start();
require "libP.php";
if(empty($_SESSION['user'])){
    header('LOCATION:loginP.php');
}

if(isset($_POST['username']))
 {
    $id = $_POST['ID'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = updateuser($id,$name,$email,$password);
    if($res==true){
    header('LOCATION: diplomaP.php');
    }
} 
else
 {
    $userid = $_GET['ID'];
    $userdata = getuserbyid($userid);
 }

include "updateNP.php";
