<?php

function register($name,$email,$password,$user_role){
    
    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = mysqli_query($connect,"INSERT INTO `user`(`name`,`email`,`password`,`user_role`) VALUES ('$name','$email','$password',$user_role)");
    $myq = mysqli_affected_rows($connect);
    if($myq==1)
    return true;
    else
    return false;
}

function login($email,$password){
    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = mysqli_query($connect,"SELECT  * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    $res = mysqli_fetch_assoc($sql);
    return $res;
}

function Alldata(){
    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = mysqli_query($connect,"SELECT `ID`,`name`,`email` FROM `user`");
    $data = [];
    while($myq = mysqli_fetch_assoc($sql))
       $data[] = $myq;

    return $data ;
}

function userRole(){
    return $_SESSION['user']['user_role'];
}

function deleteuser($id){
    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = mysqli_query($connect,"DELETE FROM `user` WHERE `ID` = $id");
    
}

function getuserbyid($id){

    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = mysqli_query($connect,"SELECT `ID`,`name`,`email`,`password` FROM `user` WHERE `ID` = $id");
    $data = mysqli_fetch_assoc($sql);
    return $data ;
}

function updateuser($id,$name,$email,$password)
{
    $connect = mysqli_connect('localhost','root','','first_projectn');
    $sql = "UPDATE `user` SET ";
    if(!empty($name)){
        $sql.="`name` = '$name'";
    }
    if(!empty($email)){
        $sql.=",`email` = '$email'";
    }
    if(!empty($password)){
        $sql.=",`password` = '$password'";
    }
    $sql.=" WHERE `ID` = $id ";
    mysqli_query($connect,$sql);
    $res = mysqli_affected_rows($connect);
    if($res==1)
    return true;
    else
    return false;
}

