<?php session_start();?>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
  <style>
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

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    body {
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-top: 150px;
    }

    .form-signin {
      width: 100%;
      max-width: 400px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 30px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .Form{
        text-align : center;
        display :flex;
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
    <!--この下から書き加える-->
    <div class="example">
      <div class="Form">
        <main class="form-signin rounded" style="background-color: #D3D3D3;">
          <form action="logincheck.php" method="post">
            <h1 class="h3 mb-3 fw-normal">ログイン</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-75 btn btn-lg btn-primary" style="margin-bottom: 30px;" type="submit">ログイン</button>
            <div class="container-fluid">
              <div class="row">
                <span class="col-lg-6 col-sm-12" style="white-space: nowrap">推し事に参加いただくためには、</span>
                <span class="col-lg-6 col-sm-12 mr-5">会員登録が必要です。</span>
              </div>
            </div>
            <button class="w-75 btn btn-lg btn-primary" type="submit">新規会員登録はこちら</button>
          </form>
        </main>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>