<?php
session_start();
include"db.php";
if(isset($_POST["f_name"]))
{
    $f_name=$_POST["f_name"];
    $l_name=$_POST["l_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $repassword= $_POST['password'];
    $mobile=$_POST['mobile'];

    if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile))
    {
        echo"<div class='alert alert-warning'>
        <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> Please fill all fields..!</b>
        </div>
        ";
        exit();
    }
    else {
        if(!preg-match($name,$f_name)){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> $f_name is not valid..!</b>
            </div>
            ;"
            exit();
        }
        if(!preg-match($name,$l_name)){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b>$l_name is not valid..!</b>
            </div>
            ;"
            exit();
        }
        if(!preg-match($emailvalidation,$email)){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> Email is not valid..!</b>
            </div>
            ;"
            exit();
        }
        if(strlen($password,$f_name)<9){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> Password is weak..!</b>
            </div>
            ;"
            exit();
        }
        if(strlen($password,$f_name)<9){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> Password is weak..!</b>
            </div>
            ;"
            exit();
        }
        if(strlen($mobile,$f_name)<9){
            echo "
            <div class='alert alert-warning'>
            <a href='#' class='close data-dismiss-'alert' aria-label='close'> &times;</a> <b> Password is weak..!</b>
            </div>
            ;"
            exit();
        }

    }
        
    }
?>