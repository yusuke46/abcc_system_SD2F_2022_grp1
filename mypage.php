<?php session_start(); ?>
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

        .mypage{
            font-weight: bold;
            text-align: center;
            font-size: 300%;
            margin-top: 5%;
            
        }

        .name{
            font-weight: bold;
            text-align: center;
            font-size: 200%;
            margin-top: 1%;
        }
        .btn {
        margin-top: 1%;
        display: block;
        width: 450px;
        height: 50px;
        text-align: left;
        line-height: 40px;
        background: rgb(216, 216, 216);
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        margin-left:auto;
        margin-right: auto;
        }
        .btn span{
        color: rgb(0, 0, 0);
        position: relative;
        padding-left: 30px;
        }
        .btn span::before{
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 7px;
        height: 7px;
        border-top: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        transform: rotate(45deg);
        margin-top: -5px;
        }

        .btn:hover{
        background-color: #cacaca;
            font-size: 20px;
            font-weight: bold;
        }

        
        </style>

        <div class="mypage container-fluid">マイページ</div>
        <div class="name container-fluid"><?php echo $_SESSION['user_mei'];?></div>;
        

        <a href="" class="btn content"><span><b>会員登録情報</b></span></a>
        <a href="" class="btn content"><span>注文履歴一覧</span></a>
        <a href="taikai.php" class="btn content"><span>退会手続き</span></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
    
