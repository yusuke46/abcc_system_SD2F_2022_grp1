<?php session_start(); ?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    body { padding-top: 90px; }
    .img{
        width: 200px;
        height: 200px;
      }
      .button{
        font-size: 40px;
      }
      </style>
</head>
<body>
<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>
  <!--この下から書き加える-->
        <style>

        .mypage{
            font-weight: bold;
            text-align: center;
            font-size: 300%;
            margin-top: 5%;
            
        }

        .name{
            font-weight: bold;
            text-align: center;
            font-size: 200%;
            margin-top: 1%;
        }
        .btn {
        margin-top: 1%;
        display: block;
        width: 450px;
        height: 50px;
        text-align: left;
        line-height: 40px;
        background: rgb(216, 216, 216);
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        margin-left:auto;
        margin-right: auto;
        }
        .btn span{
        color: rgb(0, 0, 0);
        position: relative;
        padding-left: 30px;
        }
        .btn span::before{
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 7px;
        height: 7px;
        border-top: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        transform: rotate(45deg);
        margin-top: -5px;
        }

        .btn:hover{
        background-color: #cacaca;
            font-size: 20px;
            font-weight: bold;
        }

        
        </style>

        <div class="mypage container-fluid">マイページ</div>
        <div class="name container-fluid"><?php echo $_SESSION['user_mei'];?></div>;
        

        <a href="register_information.php" class="btn content"><span><b>会員登録情報</b></span></a>
        <a href="order.php" class="btn content"><span>注文履歴一覧</span></a>
        <a href="taikai.php" class="btn content"><span>退会手続き</span></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $('.nav_toggle').on('click', function () {
        $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
      }); 
    </script>
</body>
</html>
    
