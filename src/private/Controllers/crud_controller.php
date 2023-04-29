<?php
require_once "../Config/config.php";
$variable = $_GET["operation"];
$val = explode(",",$variable);
switch ($val[0]) {
// User Delete 
    case 'delete':
        Blog::delete_all("blog_id = $val[1]");
        header("location: ../View/user_data.php");
        break;
// Admin Delete 
    case 'admin':
        Blog::delete_all("blog_id = $val[1]");
        header("location: ../View/admin_blog.php");
        break;
// Edit 
    case 'edit':
        $data = Blog::find_by_blog_id($val[1]);
        $_SESSION["blog_id"] = $data->blog_id;
        $_SESSION["blog_title"] = $data->blog_title;
        $_SESSION["blog_data"] = $data->blog_data;
        $_SESSION["image"] = $data->image;
        header("location: ../View/user_edit.php");
        break;
// Update 
    case 'update':
        $update = Blog::find_by_blog_id($_SESSION["blog_id"]);
        $update->blog_title = "$_POST[title]";
        $update->blog_data = "$_POST[data]";
        $update->image = "$_POST[image]";
        $update->save();
        header("location: ../View/user_data.php");
        break;
// Like 
    case 'like':
        // print_r($val[1]);
        $updates = Blog::find_by_blog_id($val[1]);
        $blog_id = $updates -> blog_id;
        $id = $updates -> id;
        $check_id = Like::find_by_id($id);
        $check_b_id = Like::find_by_blog_id($blog_id);
        if(!isset($check_b_id) or !isset($check_id)){
            $updates -> likes = ($updates -> likes)+1 ;
            $updates->save();
            Like::create(array("blog_id"=>"$blog_id", "ID"=>"$id"));
            header("location: ../View/user_login.php");
        }
        header("location: ../View/user_login.php");
        break;

    default:
        # code...
        break;
}
?>