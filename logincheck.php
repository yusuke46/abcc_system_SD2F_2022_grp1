
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
            $_SESSION['user_addressnumber1'] = $row['user_addressnumber1'];
            $_SESSION['user_addressnumber2'] = $row['user_addressnumber2'];
            $_SESSION['user_address'] = $row['user_address'];
            $_SESSION['user_phone'] = $row['user_phone'];
            $_SESSION['user_year'] = $row['user_year'];
            $_SESSION['user_month'] = $row['user_month'];
            $_SESSION['user_day'] = $row['user_day'];
            $_SESSION['user_gender'] = $row['user_gender'];
            $_SESSION['user_id'] = $row['user_id'];
            header('Location:top.php');
        }else{
            $er = 1;
            header('Location:login.php');
        }
    }
    if(count($searchArray)==0){
        header('Location:login.php');
    }
    ?>