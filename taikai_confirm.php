<?php session_start(); ?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <style>
      body { 
        
      }
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
      .img{
        width: 200px;
        height: 200px;
      }
      .button{
        font-size: 40px;
      }
      .search{
        width: 30px;
        height: 40px;
        padding-right: 2px;
        padding-left: 2px;
        margin-right: 10px;
        margin-left: 10px;
      }
      .cart{
        width: 40px;
        height: 40px;
        padding-right: 2px;
        padding-left: 2px;
        margin-right: 10px;
        margin-left: 10px;
      }
      .login{
        width: 60px;
        height: 40px;
        padding-right: 2px;
        padding-left: 2px;
        margin-right: 10px;
        margin-left: 10px;
      }
      .nav_toggle {
        display: block;
        position: relative;
        width: 1.75rem;
        height: 1.5rem;
      }
      .nav_toggle i {
        display: block;
        width: 100%;
        height: 2px;
        background-color: purple;
        position: absolute;
        transition: transform .5s, opacity .5s;
      }
      .nav_toggle i:nth-child(1) {
        top: 0;
      }
      .nav_toggle i:nth-child(2) {
        top: 0;
        bottom: 0;
        margin: auto;
      }
      .nav_toggle i:nth-child(3) {
        bottom: 0;
      }
      .nav_toggle.show i:nth-child(1) {
        transform: translateY(10px) rotate(-45deg);
      }
      .nav_toggle.show i:nth-child(2) {
        opacity: 0;
      }
      .nav_toggle.show i:nth-child(3) {
        transform: translateY(-12px) rotate(45deg);
      }
      .nav {
        position: fixed;
        top: 5rem;
        left: 1100;
        right: 1100;
        bottom: 1100;
        padding: 1rem;
        opacity: 0;
        visibility: hidden;
        transition: opacity .5s, visibility .5s;
        background-color: white;
        height: 100%;
        width: 100%;
        z-index: 10;
      }
      .nav.show {
        opacity: 1;
        visibility: visible;
      }
      a, a:link, a:active, a:visited, a:hover{
        color: inherit;
        list-style: none;
        text-decoration: none;
      }
        ul {
            list-style: none;
        }
        .companySet .companySetLists {
            display: -webkit-box;
            display: flex;
            margin: 3rem auto 0;
            -webkit-box-pack: center;
            justify-content: center;
            -ms-flex-flow: wrap;
            flex-flow: wrap;
            width: 90%;
        }
        .companySet .companySetList {
            margin: 0 0 1em;
        }
        .companySet .companySetList a {
            color: inherit;
        }
        .companySet .companySetList + .companySetList {
            margin: 0 0 1em 2em;
            position: relative;
        }
        .companySet .companySetList + .companySetList::before {
            content: "";
            width: 1px;
            height: 60%;
            background: #000;
            position: absolute;
            left: -1em;
            top: 50%;
            transform: translate(0, -50%);
        }
        .taikai{
            text-align: center;
            margin-top: 10%;
            font-size: 160%;
        }
        .a{
            text-align: center;
            margin-top: 5%;
            margin-bottom: 5%;
            font-size: 120%;
        }
        .btn{
          width: 300px;
        }
        .botton{
          text-align: center;
        }
        .btna{
          margin-bottom: 30px;
          margin-top: 30px;
        }
    </style>
</head>
<body>
<!--ここからNB-->
<nav class="navbar navbar-light navbar-expand-md py-2 navbar-bg fixed-top bg-white" id="main_nav" aria-label="Light offcanvas navbar">
  <div class="container-fluid">
    <div>
      <a class="navbar-brand" href="#">タイトル名</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-flex justify-content-center align-items-center">
          <a class="navbar-brand" href="search.php"><img src="img/search.jpg" class="search"></a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center">
          <a class="navbar-brand" href="cart.php"><img src="img/cart.jpg" class="cart"></a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center">
          <a class="navbar-brand" href="mypage.php"><img src="img/mypage.jpg" class="login"></a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center">
          <span class="nav_toggle">
            <i></i>
            <i></i>
            <i></i>
          </span>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">メニュー一覧</h5>
            </div>
            <div class="offcanvas-body">
              <nav class="nav">
                <ul class="nav_menu_ul justify-content-end flex-grow-1 pe-3">
                  <li class="nav_menu_li"><a href="mypage.php" style="text-align:left;">&nbsp;<h3>マイページ</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                  <li class="nav_menu_li"><a href="shohin.php" style="text-align:left;">&nbsp;<h3>商品</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                  <li class="nav_menu_li"><a href="pickup.php" style="text-align:left;">&nbsp;<h3>注目商品</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                  <li class="nav_menu_li"><a href="feature.php"style="text-align:left;" >&nbsp;<h3>特集商品</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                  <li class="nav_menu_li"><a href="#" style="text-align:left;">&nbsp;<h3>商品の登録はこちら</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                  <li class="nav_menu_li"><a href="question.php" style="text-align:left;">&nbsp;<h3>お問い合わせ・Q&A</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right;float:right"></i></a></li>
                  <hr>
                </ul>
              </nav>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="taikai content">退会手続き</div>
    <div class="a">本当に退会しますか？<br>退会したらアカウントは戻りません</div>
    <form action="taikai_complete.php" method="post">
    <?php
    echo '<input type="hidden" name="deleteid" value="' . $_POST['user_id_delete'] . '">';
    echo $_POST['user_id_delete'];
    ?>
    <div class="botton">
        <input class="btn text-white rounded-pill btna" style="background-color: #800080;" type="submit" value="退会する" ><br>
      </form>
        <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'mypage.php'" value="マイページに戻る">
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