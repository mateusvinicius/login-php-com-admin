<?php

session_cache_expire(30);
session_start();
if(isset($_GET['msg'])){
    $msg =$_GET['msg'];
    switch($msg ){
        case 'sair' :
            session_destroy();
            header("Location:../index.php");
            exit;


    }



}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</head>
<body>
<div class="sidebar">
    <div class="title">


        <img src="img/avatar.png" alt="">


        <div class="col-md-4"> <p class="xautxt" ><?php echo $_SESSION['Nome']; ?> <?php echo $_SESSION['Sobrenome'];   ?> </p></div>
    </div>
    <ul class="nav">
        <a href="#"><li class="nav-item">
                <i class="fa fa-tachometer imgs " aria-hidden="true"></i>



                <p class="xautxt">Dashboard</p>
            </li></a>

        <a href="#"><li class="nav-item">
                <i class="fa fa-calculator imgs" aria-hidden="true"></i>
                <p class="xautxt">Couser</p>
            </li></a>

        <a href=""><li class="nav-item">
                <i class="fa fa-clock-o imgs" aria-hidden="true"></i>

                <p class="xautxt">Exam</p>
            </li></a>
        <a href="#"><li class="nav-item">
                <i class="fa fa-comment-o imgs" aria-hidden="true"></i>

                <p class="xautxt">Questions</p>
            </li></a>
        <a href="#"><li class="nav-item">
                <i class="fa fa-newspaper-o imgs" aria-hidden="true"></i>

                <p class="xautxt">News</p>
            </li></a>

        <div class="usuario">

            <div class="user">
                <a href="#"><li class="nav-item">
                        <i class="fa fa-newspaper-o imgs" aria-hidden="true"></i>
                        <p class="xautxt">Usuario</p>
                    </li></a>
            </div>
            <div class="menuusuario">
                <a href="#"><li class="nav-item">
                        <i class="fa fa-newspaper-o imgs" aria-hidden="true"></i>
                        <p class="xautxt">Usuario</p>
                    </li></a>
                <a href="#"><li class="nav-item">
                        <i class="fa fa-newspaper-o imgs" aria-hidden="true"></i>
                        <p class="xautxt">Usuario</p>
                    </li></a>
                <a href="#"><li class="nav-item">
                        <i class="fa fa-newspaper-o imgs" aria-hidden="true"></i>
                        <p class="xautxt">Usuario</p>
                    </li></a>

            </div>
        </div>

    </ul>
</div>


<div class="header">
    <div class="logo"><img src="img/logo.png"></div>
    <ul class="header-nav">

        <li><i class="fa fa-user-o" aria-hidden="true"></i></li>
        <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
        <li><i class="fa fa-bell-o" aria-hidden="true"></i>
            <span class="alert">2</span>
        </li>

    </ul>
    <div class="search-form">
        <input type="text" class="search-input" placeholder ="Type for Search">
        <button class="search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>

</div>


<div class="sub-header">

    <div class="student">

        <img class="student-avatar" src="img/avatar.png" ></img>

        <div class="student-rotation">

            <p class="student-name"><?php echo $_SESSION['Nome']; ?> <?php echo $_SESSION['Sobrenome'];   ?></p>
            <span class="star_red"><i class="fa fa-star red" aria-hidden="true"></i></span>
            <span class="star_red"><i class="fa fa-star red" aria-hidden="true"></i></span>
            <span class="star_red"><i class="fa fa-star red" aria-hidden="true"></i></span>
            <span class="star_grey"><i class="fa fa-star grey" aria-hidden="true"></i></span>
            <span class="star_grey"><i class="fa fa-star grey" aria-hidden="true"></i></span>
        </div>

        <div class="student-status">
            <?php echo $_SESSION['nivel'];   ?>	<a href="#">Learn More</a>
        </div>
    </div>
    <div class="header-icon-container">
        <span class="icon-hover">Sair</span>
        <a href="index.php?msg=sair"><i class="fa fa-sign-out header-icon"  aria-hidden="true"></i></a>

    </div>

    <div class="header-icon-container">
        <span class="icon-hover">Editar</span>

        <a href="index.php?page=edit"><i class="fa fa-pencil header-icon"   aria-hidden="true"></i></a>


    </div>

</div>



