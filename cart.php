<?php session_start();?>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
  <style>
    body { padding-top: 90px; }
        .i{
          width: 180%;
        }
        .mozi{
          margin-top: 5%;
        }
        .h{
          margin-top: 5%;
        }
        .c{
          margin-top: 35%;
        }
        .baka{
          margin-top: 5%;
          margin-bottom: 5%;
        }
        .k{
          text-align: right;
        }
        .btn{
          width: 50%;
          height: 150%;
        }
        .btna{
          text-align: center;
          margin-bottom: 8%;
        }
        .d{
          margin-top: 10%;
          margin-bottom: 20%;
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
    if(isset($_SESSION['shohin_id'])):
      $searchArray = $dbmng->insertCart($_SESSION['user_id'],$_SESSION['shohin_id'],$_SESSION['shohin_mei'],$_SESSION['shohin_tanka'],$_SESSION['shohin_img'],$_SESSION['count'],$_SESSION['subtotal']);
      $cartShohin = $dbmng->deleteCart();
      $userShohin = $dbmng->getUserShohin($_SESSION['user_id']);
      ?>
      <h2 class="text-center mt-5">カートの中身</h2>
      <p style="border-bottom: 3px solid  #A9A9A9" class="mt-5 mx-5 rounded"></p>
      <?php foreach($userShohin as $row): ?>
        <form action="shohincheck2.php" method="post">
          <div class="container">
            <div class="row h">
              <div class="col-2">
                <img src="<?php echo $row['cart_shohin_img']; ?>" class="i">
              </div>
              <div class="col-2"></div>
              <div class="col-6">
                <h5 class="mozi"><?php echo $row['cart_shohin_mei']; ?></h5>
                <input type="hidden" value="<?php echo $row['cart_shohin_tanka']; ?>" name="tanka">
                <h5 class="c">単価：<?php echo $row['cart_shohin_tanka']; ?></h5>
                <input type="hidden" value="<?php echo $row['cart_shohin_tanka']*$row['cart_shohin_count']; ?>" name="subtotal">
                <h5 class="">小計：<?php echo $row['cart_shohin_tanka']*$row['cart_shohin_count']; ?></5>
              </div>
              <div class="col-2">
                <input type="number" min="1" max="10" value="<?php echo $row['cart_shohin_count']; ?>" name="ucount">
                <input type="hidden" value="<?php echo $row['cart_id'];?>" name="uid">
                <input type="submit" value="数量変更">
              </div>
            </div>
            <p style="border-bottom: 3px solid  #A9A9A9" class="mt-5 mx-5 rounded"></p>
          </div>
        </form>
        <?php endforeach; ?>
        <div class="row baka">
          <div class="col-2">

          </div>
          <div class="col-3">
            <h5 class="l">商品合計数：</h5>
          </div>
          <div class="col-2">

          </div>
          <div class="col-3">
            <h5 class="k">
              <?php
              $sum = $dbmng->getSum($_SESSION['user_id']);
              foreach($sum as $row){
                echo $row[0];
              }
              ?>
            </h5>
          </div>
          <div class="col-2">

          </div>
        </div>
        <div class="row baka">
          <div class="col-2">
            
          </div>
          <div class="col-3">
            <h5 class="l">商品合計：</h5>
          </div>
          <div class="col-2">

          </div>
          <div class="col-3">
            <h5 class="k">￥
              <?php
              $totalsum = $dbmng->gettotalSum();
              foreach($totalsum as $row){
                echo $row[0];
              }
              ?>
            </h5>
          </div>
          <div calss="col-2">

          </div>
        </div>
        <div class="row">
          <div class="col-6 btna">
            <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'top.php'" value="買い物を続ける">
          </div>
          <div class="col-6 btna">
            <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" onclick="location.href = 'buy.php'" value="ご注文手続きへ進む"><br>
          </div>
        </div>
      </div>
    <?php else: ?>
      <h2 class="text-center mt-5 mb-5">カートの中身</h2>
      <hr>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <p class="d" style="text-align: center;">現在、カートには商品が入ってません。</p>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4 btna">
          <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'top.php'" value="買い物を続ける">
        </div>
        <div class="col-4"></div>
      </div>
    <?php endif; ?>
    <hr>
  
  <div class="companySet">
        <ul class="companySetLists">
            <li class="companySetList">
                <a href="https://www.yahoo.co.jp/">運営企業情報</a>
            </li>
            <li class="companySetList">
                <a href="https://www.google.co.jp/">特定商取引法に基づく表示</a>
            </li>
            <li class="companySetList">
                <a href="https://www.google.co.jp/intl/ja/chrome/">ご利用ガイド</a>
            </li>
            <li class="companySetList">
                <a href="https://www.metro.tokyo.lg.jp/">プライバシーポリシー</a>
            </li>
            <li class="companySetList">
                <a href="https://www.kunaicho.go.jp/about/shisetsu/kokyo/kokyo.html">お問い合わせ・Q&A</a>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      $('.nav_toggle').on('click', function () {
        $('.nav_toggle, .nav').toggleClass('show');
      }); 
  </script>
  </div>
</body>
</html>
    
