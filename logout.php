<DOCTYPE! html>
<head>

</head>
<body>
    <?php
    session_start();

    session_destroy();

    header('Location:top.php');
    ?>
</body>