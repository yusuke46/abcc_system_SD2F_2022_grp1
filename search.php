<?php session_start();?>
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
        .mozi{
            margin-top: 5%;
            text-align: center;
            font-size: 300%;
        }

        .kategori{
            margin-top: 3%;
            margin-left: 27%;
            font-size: 150%;
        }

        .syousai{
            margin-left: 27%;
            font-size: 150%;
            margin-top: 1%;
        }

        .selectbox{
            width: 600;
            height: 12%;
            margin-left: 37%;
        }

        .textbox{
            margin-left: 37%;
            border-radius: 100vh;
            border: 1px solid #ccc;
            width: 620;
            height: 7%;
            background-color: aliceblue;
        }

        .btn-gradient-radius{
            margin-top:3% ; 
            margin-left: 37%;
            width: 450;
            height: 9%;
            display: inline-block;
            padding: 7px 20px;
            border-radius: 25px;
            text-decoration: none;
            text-align: center;
            font-size: 150%;
            color: #FFF;
            background-image: linear-gradient(45deg, #cd07ff 0%, #c402f5 100%);
            transition: .4s;
        }

        .btn-gradient-radius:hover {
            background-image: linear-gradient(45deg, #b49d9d5d 0%, #bbb8b86b 100%);
        }
        .btn{
          width: 450px;
        }
        .btna{
          margin-top: 10%;
          text-align: center;
        }
        </style>
        <div class="mozi" style="margin-bottom: 50px;">商品検索</div>
        <div class="syousai container-fluid" style="float: left">キーワード</div>
        <form action="search_shohin.php" method="post">
          <input class="textbox container-fluid" type="text" placeholder="キーワードを入力" style="margin-bottom: 50px;" name="kid">
          <div class="btna">
            <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" value="検索" onclick="location.href='search_shohin.php'">
          </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      $('.nav_toggle').on('click', function () {
        $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
      }); 
    </script>
</body>
</html>
    