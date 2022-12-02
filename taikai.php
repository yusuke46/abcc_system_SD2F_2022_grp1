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
<<<<<<< Updated upstream
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
=======
>>>>>>> Stashed changes
        </style>
        <script>
          function check(){
            if(document.getElementById("check1").checked != true || document.getElementById("check2").checked != true){
              error.innerHTML = "下記項目にチェックを入れてください。";
              return false;
            }
          }
        </script>
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
<style>
 .taikai{
  text-align: center;
  margin-top: 1%;
  font-size: 260%;
  margin-top: 3%;
 }

 .cp_hr01 {
	border-width: 3px 3 3 3;
	border-style: solid;
	border-color: #b8b8b8;
  width: 93%;
  margin-top: 3%;
  margin-left: auto;
  margin-right: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}
.cp_hr02 {
	border-width: 3px 3 3 3;
	border-style: solid;
	border-color: #b8b8b8;
  width: 87%;
  margin-left: auto;
  margin-right: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.cp_hr03{
  margin-top: 1%;
	border-width: 3px 3 3 3;
	border-style: solid;
	border-color: #b8b8b8;
  width: 85%;
  margin-left: auto;
  margin-right: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}
  .mozi1{
    text-align: center;
  }

.aiueo{
  margin-left: 10%;
  font-size: 110%;
  font-weight: bold;
}

.kozinn{
  display: inline-block;
  margin-left: 25%;
  margin-right: 75%;
}

input[type=checkbox]{
    margin-top: 2px;
    margin-left: 250%;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    position: relative;
    height: 20px;
    width: 20px;
    vertical-align: -0.8rem;
    transition:all .15s ease-out 0s;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    outline: none;
    border-radius: 10%;
}
/* Checkbox */
input[type=checkbox]:before,input[type=checkbox]:after {
    position: absolute;
    content: "";
    background: #fff;
    transition: all .2s ease-in-out;
}
input[type=checkbox]:before {
    left: 2px;
    top: 6px;
    width: 0;
    height: 2px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
input[type=checkbox]:after {
    right: 9px;
    bottom: 3px;
    width: 2px;
    height: 0;
    transform: rotate(40deg);
    -webkit-transform: rotate(40deg);
    -moz-transform: rotate(40deg);
    -ms-transform: rotate(40deg);
    -o-transform: rotate(40deg);
    transition-delay: .2s;
}
input[type=checkbox]:checked:before {
    left: 1px;
    top: 10px;
    width: 6px;
    height: 2px;
}
input[type=checkbox]:checked:after {
    right: 5px;
    bottom: 1px;
    width: 2px;
    height: 14px;
}


/* 色は青色のみ */
input[type=checkbox].blue,input[type=radio].blue {
    border: 2px solid #e599cf;
}
input[type=checkbox].blue:checked,input[type=checkbox].blue:indeterminate,input[type=radio].blue:checked:before {
    background: #e599cf;
}

.cyumon{
  display: inline-block;
  margin-left: 25%;
  margin-right: 75%;
}

.ringo{
display: inline-block;
margin-left: 25%;
  margin-right: 75%;
padding: auto;

}

#error{
  text-align: center;
  color: red;
}

.botton{
          text-align: center;
}

.btn{
          width: 300px;
        }

 </style>

  <div class="taikai content">退会手続き</div>
  <hr class="cp_hr01" />

  <div class="container">
    <div class="mozi1">下記項目をご理解いただけましたら、チェックボックスにチェックを入れてお進みください。</div>
    <hr class="cp_hr02" />
    <form action="taikai_confirm.php" method = "post" onsubmit="return check()">
    <div class="row">
      <div class="col-sm-1"><input class="blue" type="checkbox" id="check1" value="sakana"></div>
      <div class="aiueo col-sm-6">会員登録情報</div>
      <div class="kozinn">個人情報規定ならびに弊社のセキュリティーシステム上、退会後は会員情報の内容確認はできなくなります。</div>
      <hr class="cp_hr03" />
    </div>

    <div class="row">
      <div class="col-sm-1"><input class="blue" type="checkbox" id="check2" value="aho"></div>
      <div class="aiueo col-sm-6">ご注文商品について</div>
      <div style="text-align:center"></div>
      <div class="cyumon">ご注文いただきました商品は、退会お手続きをいただきましてもキャンセルとはなりません。</div>
      <div class="ringo">出荷準備が完了次第商品をお届けさせていただきます。</div>
      <hr class="cp_hr03" />
      <p id="error"></p>
      <?php
  
      echo '<input type="hidden" name="user_id_delete" value="' . $_SESSION['user_id'] . '">';
      ?>

      <div class="botton">
        <input class="btn text-white rounded-pill mb-3" style="background-color: #800080;" type="submit" value="確認ページへ"><br>
        <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'mypage.php'" value="マイページに戻る">
      </div>
    </div>
  </div>
</form>



  







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
    </html>
    
