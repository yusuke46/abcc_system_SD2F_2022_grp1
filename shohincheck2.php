<?php
session_start();
require 'DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->getByShohin($_POST['uid']);
foreach($searchArray as $row){
    $_SESSION['shohin_id'] = $row['shohin_id'];
    $_SESSION['shohin_mei'] = $row['shohin_mei'];
    $_SESSION['shohin_tanka'] = $row['shohin_tanka'];
    $_SESSION['shohin_information'] = $row['shohin_information'];
    $_SESSION['shohin_img'] = $row['shohin_img'];
    $_SESSION['shohin_feature'] = $row['shohin_feature'];
    $_SESSION['shohin_attention'] = $row['shohin_attention'];
    $_SESSION['shohin_industry'] = $row['shohin_industry'];
    $_SESSION['shohin_detail'] = $row['shohin_detail'];
    $_SESSION['count'] = $_POST['ucount'];
    header('Location:cart.php');
}
?>