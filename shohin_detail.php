<?php session_start()?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <style>
      body { 
        
      }
      .img{
        width: 200px;
        height: 200px;
      }
        .k{
            margin-top: 10%;
        }
        .a{
            margin-top: 5%;
            margin-bottom: 30%;
        }
        .b{
            margin-top: 5%;
        }
        .c{
            margin-bottom: 30%;
        }
        .btn{
          width: 450px;
        }
        .btna{
          margin-top: 10%;
          text-align: center;
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
    <div class="row k">
        <?php
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $Shohin = $dbmng->getByCartShohinSourse($_POST['shohinid']);
        foreach($Shohin as $row):?>
          <div class="col-4">
            <form action="shohincheck.php" method="post">
              <input type="hidden" value="<?php echo $row['shohin_id'];?>" name="id">
              <img src="<?php echo $row['shohin_img']; ?>" value="<?php echo $row['shohin_img']; ?>" name="img">
            </div>
            <div class="col-4">
            </div>
            <div class="col-4">
              <h2 class="b" value="<?php echo $row['shohin_mei'];?>" name="mei"><?php echo $row['shohin_mei']; ?></h2>
              <h5 class="a" value="<?php echo $row['shohin_tanka'];?>" name="tanka">￥<?php echo $row['shohin_tanka']; ?></h5>
              <h4 class="c" value="<?php echo $row['shohin_information'];?>" name="information"><?php echo $row['shohin_information']; ?></h4>
              <label for="suuryo" class="form-label">数量</label>
              <select class="form-select d-block w-100 required" name="count">
                <?php for($i=1;$i<11;$i++): ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor;?>
              </select> 
              <br>
              <div class="btna">
                <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" value="カートに入れる" onclick="location.href='cart.php'">
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