<?php
require_once "../Config/config.php";
if ($_POST["title"]&&$_POST["data"]&&$_POST["image"]){
    Blog::create(array("ID"=>"$_SESSION[id]", "blog_title"=>"$_POST[title]", "blog_data"=>"$_POST[data]", "image"=>"$_POST[image]"));
    header("location: ../../private/View/user_data.php");
}
else{
    header("location: ../../private/View/user/user_data.php?msg=fill_all");
}
?>