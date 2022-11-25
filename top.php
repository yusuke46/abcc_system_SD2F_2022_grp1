<!DOCKTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
      body { 
        padding-top: 90px; 
      }

      /*空白行*/
      .nl{
        height: 100px;
      }

      /*ナビゲーションバー*/
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

      /*トップ一番上の動くやつ*/
      .swiper-container{
        height: 350px;
      }
      .swiper-wrapper{
        align-items: center;
      }
      .swiper-slide{
        width: 350px;
        height: 350px;
        border-radius: 5px;
      }
      .swiper-slide img{
        width: 370px;
        height: 370px;
        border-radius: 5px;
      }
      .swiper-slide-active{
        transform: scale(1.2);
        transition: 1s;
      }
      .img{
        width: 200px;
        height: 200px;
        border-radius:100px;
      }
      .button{
        font-size: 40px;
      }
      
      /*一番下のプラポリとかのやつ*/
      a {
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
    </style>
</head>
<body>
<!--ここからNB-->
<div class="container-fluid">
  <nav class="navbar fixed-top bg-light p-4 row" id="main_nav" aria-label="Light offcanvas navbar">
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
  </nav>
</div>
      <!--ここまでNB-->
  <!--この下から書き加える-->
  <div style="background: linear-gradient(to left top, black, white);">
        <!-- ここが回る画像の場所 -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/one.png"></div>
        <div class="swiper-slide"><img src="img/two.png"></div>
        <div class="swiper-slide"><img src="img/tree.png"></div>
        <div class="swiper-slide"><img src="img/for.png"></div>
        <div class="swiper-slide"><img src="img/kawaii.png"></div>
      </div>
        <!-- これはいじっちゃダメ -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS --><!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <!-- ここ回るためのコード!いじるのなし！！！ -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 200,
        centeredSlides : true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
        grabCursor: true,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </div>
      
     <!-- 改行 -->
  <div class="nl"></div>

     <!-- 商品一覧へ行くやつ -->
  <div class="container">
    <div class="row">
        <button class="button col-md-4 offset-md-2 col-sm-4 btn btn-primary">
          <img src="img/tokino_2.png" class="img">
          <br>推し事
        </button>
      <button class="button col-md-4 btn btn-danger">
        <img src="img/otaku.png" class="img">
        <br>ヲタク
      </button>
    </div>
  </div>
  
     <!-- 改行 -->
     <div class="nl"></div>

     <!-- プラポリ系 -->
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
</body>
</html>