<!DOCKTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body { padding-top: 90px; }

        .nav-item{
            border-bottom: 1px solid #C0C0C0;
            padding-bottom: 2px;
            padding-top: 2px;
        }

        #icon{
            padding-top: 2px;
        }

        #main_nav{
          border-bottom: 5px solid 	#8a2be2;
        }
        </style>
</head>
<body>

<div class="container-fluid">
<nav class="navbar fixed-top bg-light row pt-4 pb-4" id="main_nav" aria-label="Light offcanvas navbar">
        <div class="col-lg-8 col-md-8 col-sm-4">
    <a class="navbar-brand" href="#">タイトル名</a>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-2">
    <a class="navbar-brand" href="#">画像１</a>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-2">
    <a class="navbar-brand" href="#">画像２</a>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-2">
    <a class="navbar-brand" href="#">画像３</a>
      </div>
    <div class="col-lg-1 col-md-1 col-sm-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">メニュー一覧</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;ログイン/新規登録<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;商品<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;注目商品<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;特集商品<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;商品の登録はこちら<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="text-align:left;">&nbsp;お問い合わせ・Q&A<i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a>
            </li>
          </ul>
        </div>
      </div>
      </div>
      </div>
  </nav>
  <!--ここから-->
  <h2 class="mt-4 mb-5" style="text-align:center">購入画面</h2>
  <h3 class="offset-2 mt-3 mb-3">ご注文情報</h3>
  <div class="container-fluid">
    <div class="row">
        <!--   phpループ↓   -->
        <div class="col-3 offset-2" style="background-color:#DCDCDC; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p>型番</p>
    </div>
    <div class="col-5" style="border-right: 2px solid #A9A9A9; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p> . $_POST['shohin_model'] . </p>
    </div>
        <div class="col-2">
    </div>
    <div class="col-3 offset-2" style="background-color:#DCDCDC; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p>商品名</p>
    </div>
    <div class="col-5 pb-5" style="border-right: 2px solid #A9A9A9; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p> . $_POST['shohin_name'] . </p>
    </div>
        <div class="col-2">
    </div>
    <div class="col-3 offset-2" style="background-color:#DCDCDC; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p>数量</p>
    </div>
    <div class="col-5" style="border-right: 2px solid #A9A9A9; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p> . $_POST['shohin_model'] . </p>
    </div>
        <div class="col-2">
    </div>
    <div class="col-3 offset-2" style="background-color:#DCDCDC; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p>単価(税込)</p>
    </div>
    <div class="col-5" style="border-right: 2px solid #A9A9A9; border-top: 2px solid #A9A9A9; border-left: 2px solid #A9A9A9">
        <p> . $_POST['shohin_name'] . </p>
    </div>
        <div class="col-2">
    </div>
    <div class="col-3 offset-2" style="background-color:#DCDCDC; border-top: 2px solid #A9A9A9; border-bottom: 2px solid #A9A9A9;  border-left: 2px solid #A9A9A9">
        <p>小計</p>
    </div>
    <div class="col-5" style="border: 2px solid #A9A9A9;">
        <p> . $_POST['shohin_model'] . </p>
    </div>
        <div class="col-2">
    </div>
    </div>
    <p style="border-bottom: 3px solid  #A9A9A9" class="m-5 rounded"></p>
    <!--   phpループ↑   -->
  <?php
//　　　rowの中に商品情報
//　　　$DBarr = $_POST['shohin_value']; 　　商品情報を受け取り
//　　　foreach($DBarr as $row){
//　　　echo ----phpループ貼り付け----
//　　　}
//      もしくはsession
  ?>
  </div>
    </div>
    <!-- ここからお客様情報 -->
    <h3 class="offset-1 mb-4">お客様情報</h3>
    <h5 class="offset-2 mb-2">お客様名（全角）　　:$_POST['customer_name_B']</h4>
    <h5 class="offset-2 mb-2">お客様名（全角カナ）:$_POST['customer_name_S']</h4>
    <h5 class="offset-2 mb-2">メールアドレス　　　　:$_POST['customer_mailaddress']</h4>
    <h5 class="offset-2 mb-2">郵便番号　　　　　:$_POST['customer_postcode']</h4>
    <h5 class="offset-2 mb-2">住所　　　　　　　:$_POST['customer_address']</h4>
    <?php
    // echo '<h5 class="offset-3 mb-2">お客様名（全角）：' . $_POST['customer_name_B'] . "</h4>";
    // echo '<h5 class="offset-3 mb-2">お客様名（全角カナ）：' . $_POST['customer_name_S'] . "</h4>";
    // echo '<h5 class="offset-3 mb-2">メールアドレス：' . $_POST['customer_mailaddress'] . "</h4>";
    // echo '<h5 class="offset-3 mb-2">郵便番号：' . $_POST['customer_postcode'] . "</h4>";
    // echo '<h5 class="offset-3 mb-2">住所：' . $_POST['customer_address'] . "</h4>";
    ?>
    <p style="border-bottom: 3px solid  #A9A9A9" class="m-5 rounded"></p>
    <p class="text-center mb-3">下記「個人情報の取り扱いについて」、<br>「利用規約（会員規約）」にご同意の上、お申込みください。</p>
    <p class="text-center mb-3">個人情報の取り扱いについて</p>
    <p class="offset-1">【個人情報の取り扱いについて】<br>・----------------------------------------------------------------------------------------------<br>
    --------------------------------------------------------------------------------------------------------------------------------------------<br>
    ・------------------------------------------------------------------------------------------------------------<br>
    ・-----------------------------------------------------------------------------------------------------------------------<br>
    <p class="text-center mb-3">利用規約（会員規約）</p>
    <p class="text-center mb-3">当社は運営する「推し事」の利用について、以下のとおり本規約を定めます。</p>
    <p class="offset-3 mb-3">第1条（定義）</p>
    <p class="text-center mb-5">本規約においては、次の各記号記載の用語はそれぞれ次の意味で使用します。<br>「推し事」は商品またはサービスの規定において、</p>
    <form action="???.php" method="post">
        <div class="text-center">
    <input type="checkbox" name="kiyaku" style="transform: scale(3.0);">　　「個人情報の取り扱いについて」、<br>　　　　　　　　　　
    「ご利用規約（会員規約）」「注意事項」に同意する<br>
</div>
<div class="text-center">
    <input class="btn text-white mt-3 mb-3" style="background-color: #800080;" type="button" value="注文内容の確認ページへ"><br>
    <input class="btn text-dark border" style="background-color: #dcdcdc;" type="button" value="　　　カートに戻る　　　">
</div>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
    </html>
    
