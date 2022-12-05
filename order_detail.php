<?php session_start(); ?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <style>
        .mo{
            margin-top: 10%;
            margin-bottom: 10%;
            text-align: center;
        }
        .mozi{
            text-align: left;
        }
        .m{
            text-align: right;
        }
        .ab{
            margin-bottom: 5%;
        }
        .or{
            margin-top: 10%;
            margin-bottom: 8%;
        }
        .btna{
          text-align: center;
          margin-bottom: 6%;
        }
        .btn{
          height: 150%;
          width: 100%;
        }
    </style>
</head>
<body>
<!--ここからNB-->
<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>
<div class="container">
<h2 class="or" style="text-align:center">注文履歴詳細</h2>
<?php
require 'DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->getOrderdetail($_SESSION['order_id']);
foreach($searchArray as $row):?>
    <div class="row ab">
        <div class="col-4"></div>
        <div class="col-3">
            <h5 class="mozi">注文番号</h5>
        </div>
        <div class="col-2">
            <h5 class="mozi"><span class="m"><?php echo $row['order_id']; ?></span></h5>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row ab">
        <div class="col-4"></div>
        <div class="col-3">
            <h5 class="mozi">注文日時</h5>
        </div>
        <div class="col-2">
            <h5 class="mozi"><span class="m"><?php echo $row['order_date']; ?></span></h5>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row ab">
        <div class="col-4"></div>
        <div class="col-3">
            <h5 class="mozi">商品名</h5>
        </div>
        <div class="col-2">
            <h5 class="mozi"><span class="m"><?php echo $row['shohin_name']; ?></span></h5>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row ab">
        <div class="col-4"></div>
        <div class="col-3">
            <h5 class="mozi">お支払金額</h5>
        </div>
        <div class="col-2">
            <h5 class="mozi"><span class="m"><?php echo $row['order_subtotal']; ?></span></h5>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 btna">
            <input class="btn text-white rounded-pill" style="background-color: #800080;" type="button" value="注文履歴一覧に戻る" onclick="location.href='order_check.php'"/><br>
        </div>  
        <div class="col-4"></div>
    </div>
    <?php endforeach; ?>
</div>

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
      <!-- CDN -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="script/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav').toggleClass('show');
    }); 
  </script>
</body>
</html>