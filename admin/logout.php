<?php
session_start();
$_SESSION['admin']=null;
$_SESSION['wrong']=null;
header("Location: login.php");