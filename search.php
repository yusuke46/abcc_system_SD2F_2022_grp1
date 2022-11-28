<?php session_start();?>
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

        <style>
        .mozi{
            margin-top: 5%;
            text-align: center;
            font-size: 300%;
        }

        .kategori{
            margin-top: 3%;
            margin-left: 27%;
            font-size: 150%;
        }

        .syousai{
            margin-left: 27%;
            font-size: 150%;
            margin-top: 1%;
        }

        .selectbox{
            width: 600;
            height: 12%;
            margin-left: 37%;
        }

        .textbox{
            margin-left: 37%;
            border-radius: 100vh;
            border: 1px solid #ccc;
            width: 620;
            height: 7%;
            background-color: aliceblue;
        }

        .btn-gradient-radius{
            margin-top:3% ; 
            margin-left: 37%;
            width: 450;
            height: 9%;
            display: inline-block;
            padding: 7px 20px;
            border-radius: 25px;
            text-decoration: none;
            text-align: center;
            font-size: 150%;
            color: #FFF;
            background-image: linear-gradient(45deg, #cd07ff 0%, #c402f5 100%);
            transition: .4s;
        }

        .btn-gradient-radius:hover {
            background-image: linear-gradient(45deg, #b49d9d5d 0%, #bbb8b86b 100%);
        }
        </style>
        <div class="mozi" style="margin-bottom: 50px;">商品検索</div>
        <div class="syousai container-fluid" style="float: left">キーワード</div>
        <input class="textbox container-fluid" type="text" value="" placeholder="キーワードを入力" style="margin-bottom: 50px;"><br>
        <a  href="#" class="btn-gradient-radius">検索</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
    