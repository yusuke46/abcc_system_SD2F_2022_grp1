<!DOCKTYPE HTML>
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
  </style>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar fixed-top bg-light row p-4" id="main_nav" aria-label="Light offcanvas navbar">
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
    <!--この下から書き加える-->
    <div class="example">
      <div class="Form">
        <main class="form-signin rounded" style="background-color: #D3D3D3;">
          <form>
            <h1 class="h3 mb-3 fw-normal">ログイン</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>