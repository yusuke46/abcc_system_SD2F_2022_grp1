<?php session_start();?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
         body { 
        padding-top: 130px;
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
  <h2 class="mt-5 mb-5" style="text-align:center">購入完了画面</h2>
  <h3 style="text-align:center">購入しました</h3>
  <div style="text-align:center">
  <input class="btn btn-lg btn-outline-dark rounded-pill" style="background-color: #ff00ff;" type="button" id="BackToCartButton" onclick="location.href = 'top.php'" value="ホームに戻る">
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav').toggleClass('show');
    }); 
  </script>
</body>
    </html>
    
