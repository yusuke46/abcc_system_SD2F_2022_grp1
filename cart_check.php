<?php
    session_start();
    require 'DBManager.php';
    $dbmng = new DBManager();
    $array = $dbmng->getByCartShohinSourse($_POST['id']);
    foreach($array as $row){
        $_SESSION['id'] = $row['shohin_id'];
        $_SESSION['mei'] = $row['shohin_mei'];
        $_SESSION['tanka'] = $row['shohin_tanka'];
        $_SESSION['information'] = $row['shohin_information'];
        $_SESSION['img'] = $row['shohin_img'];
        header('Location:cart.php');
    }
?>