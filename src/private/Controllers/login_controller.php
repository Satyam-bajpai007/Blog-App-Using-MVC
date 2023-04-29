<?php
require_once "../Config/config.php";
$user = User::find_by_Email($_POST["email"]);
if ($user->password==$_POST["password"]){
    if ($user->type == "admin"){
        // print_r($_SESSION["top_5"]);
        header("location: ../../private/View/admin.php");
    }
    else{
        $_SESSION["id"] = $user->id;
        header("location: ../../private/View/user_login.php");
    }
}else{
    header("location: ../../private/View/login/login.php?msg=invalid");
}
?>