<?php
session_start();
require "libP.php";

$id = $_GET['ID'];
 if($id != $_SESSION['user']['ID']){
    deleteuser($id);
    header('LOCATION: diplomaP.php');
}
else
header('LOCATION: diplomaP.php');