<!DOCKTYPE HTML>
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
          height: 100px;
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
  <div class="py-5 text-center">
      <h2>会員登録情報変更完了</h2>
  </div>
  <div class="py-5 text-center">
      <h3>会員登録情報の変更が完了しました。</h3>
  </div>
  <div class="btnb">
      <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'register_information.php'" value="会員登録情報に戻る">
  </div>
  <div class="btnb">
      <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'mypage.php'" value="マイページに戻る">
  </div>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
    }); 
  </script>
</body>
</html>
    