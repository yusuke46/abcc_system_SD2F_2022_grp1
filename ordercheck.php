<?php
session_start();
require 'DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->getOrder($_POST['oid']);
foreach($searchArray as $row){
    $_SESSION['order_id'] = $row['order_id'];
    $_SESSION['order_date'] = $row['order_date'];
    header('Location:order_detail.php');
}
?>