<?php
session_start();
if(empty($_SESSION["email"])){
header("location:index.php");

}
session_destroy();
header("location:index.php");
?>