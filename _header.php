<!doctype html>
<html lang="en">
<head>
    <?php
        include_once "admin/DataBase && class/SeoWebSite.php";
        $query=SeoWebSite::SelectSeo();
        $item=[];
        $item=mysqli_fetch_assoc($query);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $item['title']; ?></title>
    <meta name="title" content="">
    <meta name="author" content="<?php echo $item['author']; ?>">
    <meta name="keywords" content="<?php echo $item['keywords']; ?>">
    <meta name="description" content="<?php echo $item['description']; ?>">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/fonts/maincss.css">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap-icon/bootstrap-icons.woff2">
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
    </style>
</head>
<body>