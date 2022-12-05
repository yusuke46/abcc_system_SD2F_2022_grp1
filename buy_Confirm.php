<?php session_start();?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body { padding-top: 90px; }
        .chu{
          margin-bottom: 3%;
        }
        .btna{
          text-align: center;
          margin-top: 4%;
        }
        .btn{
          height: 150%;
          width: 100%;
        }
        </style>
        <script>  //ここにjavascript
          function onButtonClickToCompletionPage(){
              location.href = 'buy_check.php'; //仮の遷移
          }
          </script>
</head>
<body>

<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
 ?>
  <!--ここから-->
  <h2 class="mt-4 mb-5" style="text-align:center">購入確認画面</h2>
  <h3 class="offset-1 mt-3 mb-3">ご注文情報</h3>
  <div class="container-fluid">
      <!--   phpループ↓   -->
    <?php 
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userShohin = $dbmng->getUserShohin($_SESSION['user_id']);
    foreach($userShohin as $row): ?>
    <div class="row chu">
      <div class="col-3">
      </div>
      <div class="col-1" style="background-color:#EEEEEE; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA">
        <p>型番</p>
      </div>
      <div class="col-2" style="background-color:#EEEEEE; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA">
        <p>商品名</p>
      </div>
      <div class="col-1" style="background-color:#EEEEEE; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA">
        <p>数量</p>
      </div>
      <div class="col-1" style="background-color:#EEEEEE; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA">
        <p>単価(税込)</p>
      </div>
      <div class="col-1" style="background-color:#EEEEEE; border-top: 2px solid #EAEAEA; border-bottom: 2px solid #EAEAEA;  border-left: 2px solid #EAEAEA">
        <p>小計</p>
      </div>
      <div class="col-3">
      </div>
      <div class="col-3">
      </div>
      <div class="col-1" style="border-right: 2px solid #EAEAEA; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA; border-bottom: 2px solid #EAEAEA;">
        <p><?php echo $row['cart_shohin_id']; ?></p>
      </div>
      <div class="col-2 pb-5" style="border-right: 2px solid #EAEAEA; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA; border-bottom: 2px solid #EAEAEA;">
        <p><?php echo $row['cart_shohin_mei']; ?></p>
      </div>
      <div class="col-1" style="border-right: 2px solid #EAEAEA; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA; border-bottom: 2px solid #EAEAEA;">
        <p><?php echo $row['cart_shohin_count']; ?></p>
      </div>
      <div class="col-1" style="border-right: 2px solid #EAEAEA; border-top: 2px solid #EAEAEA; border-left: 2px solid #EAEAEA; border-bottom: 2px solid #EAEAEA;">
        <p><?php echo $row['cart_shohin_tanka']; ?></p>
      </div>
      <div class="col-1" style="border: 2px solid #EAEAEA;">
        <p value="<?php echo $row['cart_subtotal']; ?>" name="sub"><?php echo $row['cart_subtotal']; ?></p>
      </div>
      <div class="col-3">
      </div>
    </div>
    <?php endforeach; ?>
    <div class="row">
      <div class="col-6">
      </div>
      <div class="col-2" style="text-align: center;">
        <p>小計</p>
      </div>
      <div class="col-1">
        <p>￥
        <?php
        $totalsum = $dbmng->gettotalSum();
        foreach($totalsum as $row){
          echo $row[0];
        } 
        ?>
        </p>
      </div>
      <div class="col-3">
      </div>
    </div>
    <p style="border-bottom: 3px solid  #EAEAEA" class="m-5 rounded"></p>
  </div>
    <!-- ここからお客様情報 -->
    <h3 class="offset-1 mb-4">お客様情報</h3>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-2 mb-3">
          <h5>お客様名（全角）</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_mei']; ?></h5>
        </div>
        <div class="col-lg-6 offset-2 mb-3">
          <h5>お客様名（全角カナ）</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_meikata']; ?></h5>
        </div>
        <div class="col-lg-6 offset-2 mb-3">
          <h5>メールアドレス</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_mail']; ?></h5>
        </div>
        <div class="col-lg-6 offset-2 mb-3">
        <h5>郵便番号</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_addressnumber1']; ?>-<?php echo $_SESSION['user_addressnumber2']; ?></h5>
        </div>
        <div class="col-lg-6 offset-2 mb-3">
          <h5>住所</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_address']; ?></h5>
        </div>
        <div class="col-lg-6 offset-2 mb-3">
          <h5>電話番号</h5>
        </div>
        <div class="col-lg-4 mb-3 offset-sm-2 offset-lg-0">
          <h5><?php echo $_SESSION['user_phone']; ?></h5>
        </div>
      </div>
    </div>
<div class="text-center mb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 btna">
          <input class="btn text-white rounded-pill" style="background-color: #800080;" type="button" value="購入する" onclick="onButtonClickToCompletionPage();"/><br>
      </div>  
      <div class="col-4"></div>
      <div class="col-4"></div>
      <div class="col-4 btna">
        <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'buy.php'" value="購入画面に戻る">
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav').toggleClass('show');
    }); 
  </script>
</body>
    </html>
    
