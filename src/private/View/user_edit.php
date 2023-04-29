<?php
include_once "../Config/config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEDCOSS Login</title>
</head>

<body>
    <header>
        <!-- Intro settings -->
        <style>
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 58px;
            }

            @media (max-width: 991px) {
                #intro {
                    /* Margin to fix overlapping fixed navbar */
                    margin-top: 45px;
                }
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" target="_blank" href="">
                    <b>Blog</b>
                </a>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="./user_login.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" rel="nofollow">My Blog</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Button -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="./user.php">
                                <button class="bg-primary p-1">sign out</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5 p-4"><strong>Your's Blogs</strong></h4>
                <form action="../Controllers/crud_controller.php?operation=update" method="POST">
                    <div class="row my-4">
                        <div class="col-md-3 col-sm-12">
                            <label for="title">Title:
                                <input type="text" name="title" id="title" value="<?php if(isset($_SESSION["image"])){ echo $_SESSION["blog_title"]; } ?>">
                            </label>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <textarea name="data" id="data" cols="30" rows="3" placeholder="Enter Your Data">
                            <?php if(isset($_SESSION["image"])){ echo $_SESSION["blog_data"]; }?>
                            </textarea>
                        </div>
                        <div class="col-md-3 col-sm-8">
                            <select name="image" id="image">
                                <option value="<?php if(isset($_SESSION["image"])){ echo "$_SESSION[image]"; } ?>">-Select-</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/184.jpg">Nature Image</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/023.jpg">Sea Image</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/111.jpg">Mountain Image</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/002.jpg">Landscape Image</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/022.jpg">Sunrise Image</option>
                                <option value="https://mdbootstrap.com/img/new/standard/nature/035.jpg">Environment Image</option>
                            </select>
                            <p><?php if(isset($_SESSION["image"])){ echo "$_SESSION[image]"; } ?></p>
                        </div>
                        <div class="col-md-1 col-sm-4">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </div>
                </form>
                <?php
                    if ($_GET['msg'] == "fill_all") {
                        echo "<p class='text-center' style='color: red;' id='error'><b>Fill All Input</b></p>";
                    }
                ?>

            </section>
            <!--Section: Content-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="">CEDCOSS.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
</body>

</html>