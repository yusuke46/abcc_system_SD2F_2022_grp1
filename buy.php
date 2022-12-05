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
          function onButtonClickToConfirmationPage(){
            check = document.form.CheckBox.checked;
            error = document.getElementById("error");

            if(check == true){
              location.href = 'buy_Confirm.php'; //仮の遷移
            }else{
              error.innerHTML = "※「個人情報の取り扱いについて」「利用規約（会員規約）」に同意をしてください。<br>";
            }
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
    <h2 class="mt-4 mb-5" style="text-align:center">購入画面</h2>
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
    </div>
    <p style="border-bottom: 3px solid  #EAEAEA" class="m-5 rounded"></p>
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
    <p style="border-bottom: 3px solid  #EAEAEA" class="m-5 rounded"></p>
    <!-- ここから利用規約 -->
    <p class="text-center mb-5">下記「個人情報の取り扱いについて」、<br>「利用規約（会員規約）」にご同意の上、お申込みください。</p>
    <p class="text-center mb-4"><b>個人情報の取り扱いについて</b></p>
    <p class="offset-3">【個人情報の取り扱いについて】</p>
    <p class="text-center">・---------------------------------------------------------------------------------------------------<br>
      ・---------------------------------------------------------------------------------------------------<br>
      ・---------------------------------------------------------------------------------------------------<br>
      ・---------------------------------------------------------------------------------------------------</p><br>
    <p class="text-center mb-4 mt-5"><b>利用規約（会員規約）</b></p>
    <p class="text-center mb-3">当社は運営する「推し事」の利用について、以下のとおり本規約を定めます。</p>
    <p class="offset-3 mb-1">第1条（定義）</p>
    <p class="text-center mb-5">本規約においては、次の各記号記載の用語はそれぞれ次の意味で使用します。<br>「推し事」は商品またはサービスの規定において、</p>
    <form name="form" action="">
      <div class="text-center">
        <input type="checkbox" name="kiyaku" id="CheckBox" style="transform: scale(3.0);"> <a style="position:relative;bottom:10px;margin-left:60px">「個人情報の取り扱いについて」、</a><br>
        <a style="position:relative;bottom:15px;margin-left:120px">「ご利用規約（会員規約）」「注意事項」に同意する</a><br>
        <div id="error" class="mt-2 text-danger" ></div>
      </div>
      <div class="text-center mb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4 btna">
              <input class="btn text-white rounded-pill" style="background-color: #800080;" type="button" value="注文内容確認ページへ" onclick="onButtonClickToConfirmationPage();"/><br>
            </div>  
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4 btna">
              <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'cart.php'" value="カートに戻る">
            </div>
            <div class="col-4"></div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="./script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav').toggleClass('show');
    }); 
  </script>
</body>
</html>
    
