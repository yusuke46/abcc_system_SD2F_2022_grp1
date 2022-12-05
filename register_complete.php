<?php session_start(); ?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
      body { padding-top: 90px; }
        .error {
          width : 100%;
          padding: 0;
          display: inline-block;
          font-size: 90%;
          color: red;
          box-sizing: border-box;
        }
        .btn{
          width: 500px;
        }
        .btnb{
            margin-top: 5%;
            text-align: center;
        }
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
  <?php
      require 'DBManager.php';
      $dbmng = new DBManager();
      $searchArray = $dbmng->getLogin($_POST['user1'],$_POST['user2'],$_POST['email'],$_POST['pass'],$_POST['post1'],$_POST['post2'],$_POST['address'],$_POST['phone'],$_POST['year'],$_POST['month'],$_POST['day'],$_POST['sei']);
  ?>
  <div class="py-5 text-center">
      <h2>登録しました</h2>
  </div>
  <div class="btnb">
      <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'login.php'" value="戻る">
  </div>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
    }); 
  </script>
</html>
    