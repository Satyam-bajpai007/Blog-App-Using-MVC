<?php
require_once "../Config/config.php";
// setcookie("email",$_POST["email"]);
// setcookie("password",$_POST["password"]);
if($_POST["name"]&&$_POST["email"]&&$_POST["password"]&&$_POST["c_password"]){
    if($_POST["password"]==$_POST["c_password"]){
        User::create(array("Name"=>"$_POST[name]", "Email"=>"$_POST[email]", "Password"=>"$_POST[password]"));
        header("location: ../../private/View/login/login.php");
    }
    else{
        header("location: ../../private/View/registration/registration.php?msg=not_match");
    }
}else{
    header("location: ../../private/View/registration/registration.php?msg=fill");
}
?>