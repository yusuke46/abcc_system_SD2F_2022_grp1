<?php
    session_start();
    require 'DBManager.php';
    $dbmng = new DBManager();
    $insertOrder = $dbmng->insertOrder($_SESSION['shohin_mei'],$_SESSION['shohin_tanka'],$_SESSION['count'],$_SESSION['user_id'],$_SESSION['shohin_img'],$_SESSION['shohin_tanka']*$_SESSION['count']);
    $array = $dbmng->deleteUserCart($_SESSION['user_id']);
    unset($_SESSION['shohin_id']);
    unset($_SESSION['shohin_mei']);
    unset($_SESSION['shohin_tanka']);
    unset($_SESSION['shohin_count']);
    unset($_SESSION['shohin_information']);
    unset($_SESSION['shohin_img']);
    unset($_SESSION['shohin_feature']);
    unset($_SESSION['shohin_attention']);
    unset($_SESSION['shohin_industry']);
    unset($_SESSION['shohin_detail']);
    header('Location:buy_Complete.php');
?>