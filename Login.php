<!DOCTYPE html>
<html>
    <link href="anchor.css" rel="stylesheet">
    <body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","log");
if($con->connect_error) {
    die("Failed to connect: ".$con->connect_error);}
else{
    $stmt=$con->prepare("SELECT * FROM login WHERE username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password){
             
            echo '<a href="Home.html" id="anchor">By loggin in yor are accepting our terms and conditions</a>';
            
        }else {
            echo "invalid";
        }
    }else{
        echo "Invalid";
    }
}

