<DOCTYPE! html>
<head>

</head>
<body>
    <?php
    session_start();
    require 'DBManager.php';
    $dbmng = new DBManager();
    $searchArray = $dbmng->getCheck($_POST['email']);
    foreach($searchArray as $row){
        if(password_verify($_POST['pass'],$row['user_pass'])==true){
            $_SESSION['user_pass'] = $row['user_pass'];
            $_SESSION['user_mail'] = $row['user_mail'];
            $_SESSION['user_name'] = $row['user_name'];
            header('Location:top_success.php');
        }
    }
    if(count($searchArray)==0){
        header('Location:login.php');
    }
    ?>
</body>