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
        width: 120%;
        height: 120%;
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
        text-align: center;
      }
        .pickup{
          text-align: center;
          margin-top: 10%;
          margin-bottom: 10%;
        }
        .card{
          margin-bottom: 10%;
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
      <!-- 改行 -->

  <div class="nl"></div>



<!-- 商品一覧へ行くやつ -->
<div class="container">
<div class="row osigoto">
  <form action="osigoto.php" method="post" class="button">
    <button class="button col-5 btn mt-5" style="background-color:#eeeeee;" onclick="Location.href='osigoto.php'">
      <input type="hidden" value="1" name="osi">
      <img src="img/tokino_2.png" class="img">
      <br>推し事
    </button>
  </form>
  <form action="wotaku.php" method="post" class="button">
    <button class="button col-5 btn"  style="background-color:#eeeeee;" onclick="Location.href='wotaku.php'">
      <input type="hidden" value="1" name="wota">
      <img src="img/otaku.png" class="img">
      <br>ヲタク
    </button>
  </form>
</div>

</div>



<!-- 改行 -->

<div class="nl"></div>
  
<div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="pickup">注目商品</h2>
      </div>
      <?php
      require_once 'DBManager.php';
      $dbmng = new DBManager();
      $PickUp = $dbmng->topPickUp();
      foreach($PickUp as $row): ?>
      <div class="col-md-4">
        <form action="shohin_detail.php" method="post">
          <div class="card" style="width: 26rem;">
            <button type="submit" class="border border-white" style="background-color: white;">
              <input type="hidden" value="<?php echo $row['shohin_id']; ?>" name="shohinid">
              <input type="hidden" value="<?php echo $row['shohin_information']; ?>" name="information">
              <img src="<?php echo $row['shohin_img']; ?>" class="card-img-top" name="img">
              <div class="card-body">
                <h5 class="card-title" name="mei"><?php echo $row['shohin_mei']; ?></h5>
                <input type="hidden" value="<?php echo $row['shohin_id']; ?>">
                <p class="card-text" name="tanka">￥<?php echo $row['shohin_tanka']; ?></p>
              </div>
            </button>
          </div>
        </form>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="pickup">特集</h2>
      </div>
      <?php
      require_once 'DBManager.php';
      $dbmng = new DBManager();
      $Feature = $dbmng->topFeature();
      foreach($Feature as $row): ?>
        <div class="col-md-4">
          <form action="shohin_detail.php" method="post">
            <div class="card">
              <button type="submit" class="border border-white" style="background-color: white;">
                <input type="hidden" value="<?php echo $row['shohin_id']; ?>" name="shohinid">
                <input type="hidden" value="<?php echo $row['shohin_information']; ?>" name="information">
                <img src="<?php echo $row['shohin_img']; ?>" class="card-img-top" name="img">
                <div class="card-body">
                  <h5 class="card-title" name="mei"><?php echo $row['shohin_mei']; ?></h5>
                  <input type="hidden" value="<?php echo $row['shohin_id']; ?>">
                  <p class="card-text" name="tanka">￥<?php echo $row['shohin_tanka']; ?></p>
                </div>
              </button>
            </div>
          </form>
        </div>
        <?php endforeach; ?>
      </div>
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