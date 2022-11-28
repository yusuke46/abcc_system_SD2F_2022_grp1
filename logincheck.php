
    <?php
    session_start();
    require 'DBManager.php';
    $dbmng = new DBManager();
    $searchArray = $dbmng->getCheck($_POST['email']);
    foreach($searchArray as $row){
        if($_POST['pass']==$row['user_pass']){
            $_SESSION['user_mei'] = $row['user_mei'];
            $_SESSION['user_meikata'] = $row['user_meikata'];
            $_SESSION['user_mail'] = $row['user_mail'];
            $_SESSION['user_pass'] = $row['user_pass'];
            $_SESSION['user_address'] = $row['user_address'];
            $_SESSION['user_phone'] = $row['user_phone'];
            $_SESSION['user_birth'] = $row['user_birth'];
            $_SESSION['user_gender'] = $row['user_gender'];
            $_SESSION['user_id'] = $row['user_id'];
            header('Location:top_success.php');
        }
    }
    if(count($searchArray)==0){
        header('Location:login.php');
    }
    ?>