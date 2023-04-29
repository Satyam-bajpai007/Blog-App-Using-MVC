<?php
session_start();
$_SESSION["blog"]=array();
require_once "../Library/php-activerecord/ActiveRecord.php";
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../Models');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/mydb'));
});
$_SESSION["blog"] = Blog::all();
$_SESSION["top_5"] = Blog::find_by_sql("SELECT * FROM `blogs` ORDER BY `likes` DESC LIMIT 5");
$_SESSION["txt"]="";
foreach ($_SESSION["blog"] as $key => $value) {
    $_SESSION["txt"].="<div class='col-lg-4 col-md-12 mb-4'>
    <div class='card'>
        <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
            <img src=".$value->image." class='img-fluid' />
            <a href=''>
                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
            </a>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>".$value->blog_title."</h5>
            <p class='card-text'>".$value->blog_data."</p>
            <span class='me-2'><b>".$value->likes."</b></span><a href='../View/login/login.php' class='btn btn-warning'><i class='fa-solid fa-thumbs-up' style='color: #221f51;'></i></a>
        </div>
    </div>
</div>";
}
$_SESSION["login_txt"]="";
foreach ($_SESSION["blog"] as $key => $value) {
    $_SESSION["login_txt"].="<div class='col-lg-4 col-md-12 mb-4'>
    <div class='card'>
        <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
            <img src=".$value->image." class='img-fluid' />
            <a href=''>
                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
            </a>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>".$value->blog_title."</h5>
            <p class='card-text'>".$value->blog_data."</p>
            <span class='me-2'><b>".$value->likes."</b></span><a href='../Controllers/crud_controller.php?operation=like,".$value->blog_id."' class='btn btn-warning'><i class='fa-solid fa-thumbs-up' style='color: #221f51;'></i></a>
        </div>
    </div>
</div>";
}
$_SESSION["top"]="";
foreach ($_SESSION["top_5"] as $key => $value) {
    $_SESSION["top"].="<div class='col-lg-4 col-md-12 mb-4'>
    <div class='card'>
        <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
            <img src=".$value->image." class='img-fluid' />
            <a href=''>
                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
            </a>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>".$value->blog_title."</h5>
            <p class='card-text'>".$value->blog_data."</p>
            <span class='me-2'><b>Likes: ".$value->likes."</b></span>
        </div>
    </div>
</div>";
}
// <i class="fas fa-edit" style="color: #3a3b1b;"></i>
$_SESSION["user_blog"]="";
foreach ($_SESSION["blog"] as $key => $value) {
    if ($value->id == $_SESSION["id"]){
        $_SESSION["user_blog"].="<div class='col-lg-6 col-md-12 mb-4'>
        <div class='card'>
            <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                <img src=".$value->image." class='img-fluid' />
                <a href=''>
                    <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                </a>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>".$value->blog_title."</h5>
                <p class='card-text'>".$value->blog_data."</p>
                <a href='../Controllers/crud_controller.php?operation=edit,".$value->blog_id."' class='btn btn-primary'><i class='fas fa-edit' style='color: #3a3b1b;'></i></a>
                <a href='../Controllers/crud_controller.php?operation=delete,".$value->blog_id."' class='btn btn-danger'><i class='fa-sharp fa-solid fa-trash' style='color: #111;'></i></a>
            </div>
        </div>
    </div>";
    }
}
$_SESSION["admin_blog"]="";
foreach ($_SESSION["blog"] as $key => $value) {
    $_SESSION["admin_blog"].="<div class='col-lg-3 col-md-12 mb-4'>
    <div class='card'>
        <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
            <img src=".$value->image." class='img-fluid' />
            <a href=''>
                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
            </a>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>".$value->blog_title."</h5>
            <p class='card-text'>".$value->blog_data."</p>
            <span class='me-2'><b>Likes: ".$value->likes."</b></span>
            <a href='../Controllers/crud_controller.php?operation=admin,".$value->blog_id."' class='btn btn-danger'><i class='fa-sharp fa-solid fa-trash' style='color: #111;'></i></a>
        </div>
    </div>
</div>";
}
?>