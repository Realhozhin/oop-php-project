<!doctype html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="robots" content="noindex,nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container-fluid{
            padding: 0px;
        }
        .navbar-nav>li{
            float: right;
        }
        @media(max-width:767px){
            .navbar-nav>li{
                float: none;
                text-align: center;
            }
        }
        .form{
            width: 60%;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: skyblue;
            margin: 0px auto;
            text-align: center;
            border-radius: 20px;
        }
        input[type=text]{
            width: 400px;
            height: 50px;
            margin-bottom: 15px;
            border: 3px inset lightgray
        }
        textarea{
            width: 500px;
            height: 200px;
            margin-bottom: 15px;
            resize: none;
            border: 3px inset lightgray
        }
        input[type=password]{
            width: 400px;
            height: 50px;
            margin-bottom: 15px;
            border: 3px inset lightgray
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <!--- make menu --->
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="_menu.php" data-bs-toggle="dropdown" aria-expanded="false">setting</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Slider/Slider.php">slider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Team/Team.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php" target="_blank">show website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">make new page</a></li>
                                <li><a class="dropdown-item" href="#">profile</a></li>
                                <li><a class="dropdown-item" href="../logout.php">exit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--- end make menu --->
    </br>
    <?php
        include_once "../DataBase && class/loginAdmin.php";
        $id=$_SESSION['id'];
        $query=loginAdmin::SelectUser_id($id);
        $item=[];
        $item=mysqli_fetch_assoc($query);
    ?>
    <!--- make form setting --->
    <div class="form">
        <form action="update_admin.php" method="post">
            <label for="username">username</label></br>
            <input type="text" name="username" id="username" value="<?php echo $item['username']; ?>"></br>
            <label for="password">password</label></br>
            <input type="password" name="password" id="password"></br>
            <input type="hidden" name="id" value="<?php echo $id; ?>"></br>
            <input type="submit" value="submit" class="btn btn-success btn-block">
        </form>
    </div>
    <!--- end make form setting --->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
