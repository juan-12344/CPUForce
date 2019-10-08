<?php
session_start();

$mysqli=new mysqli('localhost','root','','usuarios');
if(!$mysqli->connect_errno){
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $SQL='select * from user where username="'.$user.'"and password="'.$pass.'"';
    $result=$mysqli->query($SQL);
    if($row=$result->fetch_assoc()){
        header('location:../dist/access.html');
        
    }else{
        header('location:../dist/error.html');
    }
}

?>