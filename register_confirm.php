<!DOCKTYPE HTML>
<?php
session_start();
?>
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
        .btn{
          width: 500px;
        }
        .btna{
          margin-top: 10%;
          text-align: center;
        }
        .btnb{
            margin-top: 5%;
            text-align: center;
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
          <a class="navbar-brand" href="login.php"><img src="img/login.jpg" class="login"></a>
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
                  <li class="nav_menu_li"><a href="login.php" style="text-align:left;">&nbsp;<h3>ログイン/新規登録</h3><i class="bi bi-chevron-right" id="icon" style="text-align:right; float:right"></i></a></li>
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
  <!--この下から書き加える-->
  <body class="bg-light">
      <div class="py-5 text-center">
        <h2>新規会員登録</h2>
        </div>
        <div class="container">
    <main>
      <div class="row">
        <div class="col-12 offset-md-3 col-md-6"><!--col-md-7 col-lg-8-->
          
            <!--<div class="row g-3">-->
              <div class="col-12">
                <label for="username" class="form-label">お客様名（全角）</label>
                <input type="text" name="use" class="form-control" id="username" value="<?php echo $_POST['user']; $_SESSION['user'] = $_POST['user'];?>" disabled>
              </div>
              <div class="col-12">
                <label for="usernamek" class="form-label">お客様名（カナ）</label>
                <input type="text" name="usernamek" class="form-control" value="<?php echo $_POST['usernamek'];  $_SESSION['userk'] = $_POST['usernamek'];?>" disabled>
              </div>
              
              <div class="col-12">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" name="email" class="form-control required" id="email" value="<?php echo $_POST['email'];  $_SESSION['email'] = $_POST['email'];?>"  disabled>
              </div>
              <div class="col-12">
                <label for="pa" class="form-label">パスワード</label>
                <input type="text" class="form-control" id="pa" name="pa" value=" <?php echo $_POST['pa'];  $_SESSION['pass'] = $_POST['pa'];?>" disabled>
                <p id="pa_error"></p>
              </div>
              <div class="row">
              <div class="col-3">
                <label for="post" class="form-label">郵便番号</label>
                  <input type="text" name="bangou1" class="form-control" id="post" placeholder="" required="" value="<?php echo $_POST['post'];  $_SESSION['post1'] = $_POST['post'];?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">ー</p>
              </div>
              <div class="col-4" style="margin-top: 25px;">
                <label for="username" class="form-label"></label>
                  <input type="text" name="bangou2" class="form-control" id="username" placeholder="" required="" value="<?php echo $_POST['post2'];  $_SESSION['post2'] = $_POST['post2'];?>" disabled>
              </div>
              </div>
              <div class="row">
              <div class="col-12">
                <label for="address" class="form-label">住所</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="" required="" value="<?php echo $_POST['address'];  $_SESSION['address'] = $_POST['address'];?>" disabled>
              </div>
              <div class="col-sm-12">
                <label for="tel" class="form-label">電話番号</label>
                <input type="text" name="phone" class="form-control" id="tel" placeholder="" required="" value="<?php echo $_POST['phone'];   $_SESSION['phone'] = $_POST['phone'];?>" disabled>
              </div>

              <div class="col-3">
                <label for="birth" class="form-label">生年月日</label>
                <input type="text" name="year" value="<?php echo $_POST['year'];  $_SESSION['year'] = $_POST['year'];?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">年</p>
              </div>
              <div class="col-3">
                <label for="mbirth" class="form-label" style="margin-top: 25px;"></label>
                <input type="text" name="month" value="<?php echo $_POST['month'];  $_SESSION['month'] = $_POST['month'];?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">月</p>
              </div>
              <div class="col-3">
                <label for="dbirth" class="form-label" style="margin-top: 25px;"></label>
                <input type="text" name="day" value="<?php echo $_POST['day'];   $_SESSION['day'] = $_POST['day'];?>" disabled>
                </div>
                <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">日</p>
              </div>
                </div>
            <!--</div>-->
            <label for="seibetu" class="form-label">性別</label>
            <div class="my-3">
              <div class="form-check-inline">
                <?php
                if(isset($_POST['paymentMethod']) == true){
                  echo $_POST['paymentMethod'];
                  $_SESSION['sei'] = $_POST['paymentMethod'];
                }else{
                    echo '性別が選択されていません。';
                    $_SESSION['sei'] = "";
                }
                ?>
              </div>
            </div>
            <hr class="my-4">
            <form  method="post" action="register_complete.php">
              <?php
              echo '<input type="hidden" name="user1" value="' . $_SESSION['user'] . '">
                    <input type="hidden" name="user2" value="' . $_SESSION['userk'] .'">
                    <input type="hidden" name="email" value="' . $_SESSION['email'] .'">
                    <input type="hidden" name="pass" value="' . $_SESSION['pass'] .'">
                    <input type="hidden" name="post1" value="' . $_SESSION['post1'] .'">
                    <input type="hidden" name="post2" value="' . $_SESSION['post2'] .'">
                    <input type="hidden" name="address" value="' . $_SESSION['address'] .'">
                    <input type="hidden" name="phone" value="' . $_SESSION['phone'] .'">
                    <input type="hidden" name="year" value="' . $_SESSION['year'] .'">
                    <input type="hidden" name="month" value="' . $_SESSION['month'] .'">
                    <input type="hidden" name="day" value="' . $_SESSION['day'] .'">
                    <input type="hidden" name="sei" value="' . $_SESSION['sei'] .'">';
              ?>
                <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" value="登録する"><br>
            </form>
            <div class="btnb">
                <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'register.php'" value="戻る">
            </div>
            </div>
        </div>
    </main>

  </div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
  <script>hljs.highlightAll();</script>
	  <!-- JSの設定ファイル -->
 <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
	<script src="https://bootstrap-guide.com/js/samples.js"></script>
</body>
</body>
    </html>