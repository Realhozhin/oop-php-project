<meta name="robots" content="noindex,nofollow">
<?php include_once "../_header.php"; ?>
<?php
session_start();
include_once "DataBase && class/loginAdmin.php";
$query=loginAdmin::selectUser();
$item=[];
$flag=0;
while($item=mysqli_fetch_assoc($query)) {
    $flag=1;
}
if ($flag==0) {
    $username="erfan";
    $password="12345";
    $hash=sha1($password);
    $salt=$hash."0905";
    $final=sha1($salt);
    loginAdmin::InsertUser($username,$final);
}
if(isset($_SESSION['admin'])) {
    header("Location: admin.php");
}?>
<?php if(isset($_SESSION['wrong'])): ?>
<section class="col-6 offset-3 pt-5">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h5 class="text-center">HI DEAR,<?php echo $_SESSION['wrong']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</section>
<?php endif; ?>
<style>
    form{
        width: 500px;
        height: 300px;
        background-color: #6c757d;
        margin: 100px auto;
        border-radius: 20px;
        text-align: center;
        padding-top: 70px;
    }
    input[type=text]{
        width: 330px;
        height: 50px;
        margin-bottom: 20px;
    }
    input[type=password]{
        width: 330px;
        height: 50px;
        margin-bottom: 20px;
    }
    input[type=submit]{
        width: 170px;
        height: 45px;
        margin-bottom: 20px;
    }
</style>

<form action="check.php" method="POST">
    <input type="text" name="username" placeholder="enter your username"></br>
    <input type="password" name="password" placeholder="enter your password"></br>
    <input type="submit" value="submit">
</form>
<?php include_once "../_footer.php"; ?>
