<?php session_start(); ?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <style>
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
<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>

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