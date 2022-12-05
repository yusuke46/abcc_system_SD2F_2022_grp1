<?php
session_start();
unset($_SESSION['order_id']);
unset($_SESSION['order_date']);
header('Location:order.php');
?>