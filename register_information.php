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
    <div class="row">
        <div class="col-8 py-5 text-center">
            <h2>会員登録情報</h2>
        </div>
        <div class="col-4 btnd py-5">
            <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" value="変更する" onclick="location.href='register_fix.php'"><br>
        </div>
    </div>
      
        <div class="container">
    <main>
      <div class="row">
        <div class="col-12 offset-md-3 col-md-6"><!--col-md-7 col-lg-8-->
          <form name="myForm" class="validationForm" method="post" action="register_complete.php">
            <!--<div class="row g-3">-->
              <div class="col-12">
                <label for="username" class="form-label">お客様名（全角）</label>
                <input type="text" name="use" class="form-control" id="username" value="<?php echo $_SESSION['user_mei'];?>" disabled>
              </div>
              <div class="col-12">
                <label for="usernamek" class="form-label">お客様名（カナ）</label>
                <input type="text" name="usernamek" class="form-control" id="usernamek" data-maxlength="10" name="usernamek" value="<?php echo $_SESSION['user_meikata'];?>" disabled>
              </div>
              
              <div class="col-12">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" name="email" class="form-control required" id="email" autocomplete="new-password" size="30" name="email" value="<?php echo $_SESSION['user_mail'];?>" disabled>
              </div>
              <div class="col-12">
                <label for="pass" class="form-label">パスワード</label>
                  <input type="text" name="passw" class="form-control" id="pass" placeholder="" required="" value="<?php echo $_SESSION['user_pass'];?>" disabled>
              </div>
              <div class="row">
              <div class="col-3">
                <label for="post" class="form-label">郵便番号</label>
                  <input type="text" name="bangou1" class="form-control" id="post" placeholder="" required="" value="<?php echo $_SESSION['user_addressnumber1'];?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">ー</p>
              </div>
              <div class="col-4" style="margin-top: 25px;">
                <label for="username" class="form-label"></label>
                  <input type="text" name="bangou2" class="form-control" id="username" placeholder="" required="" value="<?php echo $_SESSION['user_addressnumber2'];?>" disabled>
              </div>
              </div>
              <div class="row">
              <div class="col-12">
                <label for="address" class="form-label">住所</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="" required="" value="<?php echo $_SESSION['user_address'];?>" disabled>
              </div>
              <div class="col-sm-12">
                <label for="tel" class="form-label">電話番号</label>
                <input type="text" name="phone" class="form-control" id="tel" placeholder="" required="" value="<?php echo $_SESSION['user_phone'];?>" disabled>
              </div>

              <div class="col-3">
                <label for="birth" class="form-label">生年月日</label>
                <input type="text" name="year" value="<?php echo $_SESSION['user_year']; ?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">年</p>
              </div>
              <div class="col-3">
                <label for="mbirth" class="form-label" style="margin-top: 25px;"></label>
                <input type="text" name="month" value="<?php echo $_SESSION['user_month']; ?>" disabled>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">月</p>
              </div>
              <div class="col-3">
                <label for="dbirth" class="form-label" style="margin-top: 25px;"></label>
                <input type="text" name="day" value="<?php echo $_SESSION['user_day']; ?>" disabled>
                </div>
                <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">日</p>
              </div>
                </div>
            <!--</div>-->
            <label for="seibetu" class="form-label">性別</label>
            <div class="my-3">
              <div class="form-check-inline" name="paymentMethod">
                <p><?php echo $_SESSION['user_gender'];?></p>
              </div>
            </div>
            <hr class="my-4">
            </form>
            </div>
        </div>
    </main>

  </div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
	
  <script src="form-validation.js"></script>
  <script>hljs.highlightAll();</script>
	  <!-- JSの設定ファイル -->
	<script>
    document.addEventListener('DOMContentLoaded', () => {
  //.validationForm を指定した最初の form 要素を取得
  const validationForm = document.querySelector('.validationForm');
  //.validationForm を指定した form 要素が存在すれば
  if(validationForm) {
    //エラーを表示する span 要素に付与するクラス名（エラー用のクラス）
    const errorClassName = 'error';
    
    //required クラスを指定された要素の集まり  
    const requiredElems = document.querySelectorAll('.required');
    //email クラスを指定された要素の集まり
    const emailElems =  document.querySelectorAll('.email');
    //tel クラスを指定された要素の集まり
    const telElems =  document.querySelectorAll('.tel');
    //maxlength クラスを指定された要素の集まり
    const maxlengthElems =  document.querySelectorAll('.maxlength');
    //equal-to クラスを指定された要素の集まり
    const equalToElems = document.querySelectorAll('.equal-to'); 
    
    //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
    //elem ：対象の要素
    //errorMessage ：表示するエラーメッセージ
    const createError = (elem, errorMessage) => {
      //span 要素を生成
      const errorSpan = document.createElement('span');
      //エラー用のクラスを追加（設定）
      errorSpan.classList.add(errorClassName);
      //aria-live 属性を設定
      errorSpan.setAttribute('aria-live', 'polite');
      //引数に指定されたエラーメッセージを設定
      errorSpan.textContent = errorMessage;
      //elem の親要素の子要素として追加
      elem.parentNode.appendChild(errorSpan);
    }
 
    //form 要素の submit イベントを使った送信時の処理
    validationForm.addEventListener('submit', (e) => {
      //エラーを表示する要素を全て取得して削除（初期化）
      const errorElems = validationForm.querySelectorAll('.' + errorClassName);
      errorElems.forEach( (elem) => {
        elem.remove(); 
      });
      
      //.required を指定した要素を検証
      requiredElems.forEach( (elem) => {
        //値（value プロパティ）の前後の空白文字を削除
        const elemValue = elem.value.trim(); 
        //値が空の場合はエラーを表示してフォームの送信を中止
        if(elemValue.length === 0) {
          createError(elem, '');
          e.preventDefault();
        }
      });
      
      //.email を指定した要素を検証
      emailElems.forEach( (elem) => {
        //Email の検証に使用する正規表現パターン
        const pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ui;
        //値が空でなければ
        if(elem.value !=='') {
          //test() メソッドで値を判定し、マッチしなければエラーを表示してフォームの送信を中止
          if(!pattern.test(elem.value)) {
            createError(elem, 'Email アドレスの形式が正しくないようです。');
            e.preventDefault();
          }
        }
      });
      
      //.tel を指定した要素を検証
      telElems.forEach( (elem) => {
        //電話番号の検証に使用する正規表現パターン
        const pattern = /^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/;
        //値が空でなければ
        if(elem.value !=='') {
          //test() メソッドで値を判定し、マッチしなければエラーを表示してフォームの送信を中止
          if(!pattern.test(elem.value)) {
            createError(elem, '電話番号の形式が正しくないようです。');
            e.preventDefault();
          }
        }
      });
      
      //.maxlength を指定した要素を検証
      maxlengthElems.forEach( (elem) => {
        //data-maxlength 属性から最大文字数を取得
        const maxlength = elem.dataset.maxlength;
        //または const maxlength = elem.getAttribute('data-maxlength');
        //値が空でなければ
        if(elem.value !=='') {
          //値が maxlength を超えていればエラーを表示してフォームの送信を中止
          if(elem.value.length > maxlength) {
            createError(elem, maxlength + '文字以内でご入力ください');
            e.preventDefault();
          }
        }
      });
      
      //.equal-to を指定した要素を検証
      equalToElems.forEach( (elem) => {
        //比較対象の要素の id 
        const equalToId = elem.dataset.equalTo;
        //または const equalToId = elem.getAttribute('data-equal-to');
        //比較対象の要素
        const equalToElem = document.getElementById(equalToId);
        //値が空でなければ
        if(elem.value !=='' && equalToElem.value !==''){
          if(equalToElem.value !== elem.value) {
            createError(elem, '入力された値が異なります');
            e.preventDefault();
          }
        }
      });
 
      //エラーの最初の要素を取得
      const errorElem =  validationForm.querySelector('.' + errorClassName);
      //エラーがあればエラーの最初の要素の位置へスクロール
      if(errorElem) {
        const errorElemOffsetTop = errorElem.offsetTop;
        window.scrollTo({
          top: errorElemOffsetTop - 40,  //40px 上に位置を調整
          //スムーススクロール
          behavior: 'smooth'
        });
      }
    }); 
  }
});
	</script>
    <script>
        function Resister(){
            <?php
            
            ?>
        }
    </script>
 <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
	<script src="https://bootstrap-guide.com/js/samples.js"></script>
</body>
</body>
    </html>