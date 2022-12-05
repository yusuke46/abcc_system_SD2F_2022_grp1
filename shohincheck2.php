<?php
session_start();
require 'DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->getCount($_POST['ucount'],$_POST['ucount']*$_POST['tanka'],$_POST['uid']);
header('Location:cart.php');
?>