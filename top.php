<!DOCKTYPE HTML>
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
      .swiper{
        background-color: white;
      }
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
        width: 50px;
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
          <a class="navbar-brand" href="buy_cart.php"><img src="img/cart.jpg" class="cart"></a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center">
          <a class="navbar-brand" href="login.php"><img src="img/login.jpg" class="login"></a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center">
          <span class="nav_toggle">
            <i></i>
            <i></i>
            <i></i>
          </span>
          <nav class="nav">
            <ul class="nav_menu_ul">
              <li class="nav_menu_li"><a href="login.php">ログイン・新規登録</a></li>
              <li class="nav_menu_li"><a href="shohin.php">商品</a></li>
              <li class="nav_menu_li"><a href="pickup.php">注目商品</a></li>
              <li class="nav_menu_li"><a href="feature.php">特集商品</a></li>
              <li class="nav_menu_li"><a href="#">商品の登録はこちら</a></li>
              <li class="nav_menu_li"><a href="question.php">お問い合わせ・Q&A</a></li>
            </ul>
          </nav>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <!--ここまでNB-->
  <!--この下から書き加える-->
  <div style="background: linear-gradient(to left top, black, white);">
        <!-- ここが回る画像の場所 -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/1.jfif"></div>
        <div class="swiper-slide"><img src="img/2.jfif"></div>
        <div class="swiper-slide"><img src="img/3.jfif"></div>
        <div class="swiper-slide"><img src="img/4.jfif"></div>
        <div class="swiper-slide"><img src="img/5.jfif"></div>
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
      
  <div class="container">
    <div class="row">
      <div class="col-48">　</div>
        <button class="button col-md-4 offset-md-2 btn btn-primary">
          <img src="img/tokino_2.png" class="img">
          <br>推し事
        </button>
      <button class="button col-md-4 btn btn-danger">
        <img src="img/otaku.png" class="img">
        <br>ヲタク
      </button>
    </div>
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