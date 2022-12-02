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
      .btn{
        width: 300px;
      }
      .error {
        width : 100%;
        padding: 0;
        display: inline-block;
        font-size: 90%;
        color: red;
        box-sizing: border-box;
      }
      .email{
        margin-bottom: 3%;
      }
      .f{
        text-align: left;
      }
      #floatingPassword{
        margin: 0;
      }
      .btna{
        margin-top: 5%;
        margin-bottom: 5%;
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
        <main class="form-signin rounded" style="background-color: #EEEEEE;">
          <form action="logincheck.php" method="post" class="validationForm" novalidate>
            <h1 class="h3 mb-3 fw-normal">ログイン</h1>
            <div class="for">
              <div class="f">
                <label for="email" class="form-label f">メールアドレス</label>
              </div>
              <input type="email" class="form-control required email rounded"  id="email" placeholder="name@example.com" size="30" name="email">
            </div>
            <div class="for">
              <div class="f">
                <label for="floatingPassword" class="form-label f">パスワード</label>
              </div>
              <input type="password" class="form-control required maxlength rounded" id="floatingPassword" placeholder="Password" data-maxlength="20" name="pass">
            </div>
            <input class="btn text-white rounded-pill btna" style="background-color: #800080;" type="submit" value="ログイン"><br>
            <div class="container-fluid">
              <div class="row">
                <span class="col-lg-6 col-sm-12" style="white-space: nowrap">推し事に参加いただくためには、</span>
                <span class="col-lg-6 col-sm-12 mr-5">会員登録が必要です。</span>
              </div>
            </div>
            <input class="btn text-white rounded-pill btna" style="background-color: #800080;" type="button" value="新規登録はこちらから" onclick="location.href='register.php'"><br>
          </form>
        </main>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
            createError(elem, '入力は必須です');
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
</body>
</html>