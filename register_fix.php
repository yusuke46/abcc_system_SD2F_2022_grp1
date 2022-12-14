<?php session_start(); ?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <style>
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
        }
        /* エラーメッセージのスタイル */
        .error {
          width : 100%;
          padding: 0;
          display: inline-block;
          font-size: 90%;
          color: red;
          box-sizing: border-box;
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
    </style>  
</head>

<body>
  

<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>
  <!--この下から書き加える-->
  <body class="bg-light">
      <div class="py-5 text-center">
        <h2>会員登録情報修正</h2>
        </div>
        <div class="container">
    <main>
      <div class="row">
        <div class="col-12 offset-md-3 col-md-6"><!--col-md-7 col-lg-8-->
          <form name="myForm" class="validationForm" action="register_fix_confirm.php" method="post" novalidate>
            <!--<div class="row g-3">-->
              <div class="col-12">
                <label for="username" class="form-label">お客様名（全角）</label>
                <input type="text" class="form-control required maxlength" id="username" value="<?php echo $_SESSION['user_mei'];?>" name="user">
              </div>
              <div class="col-12">
                <label for="usernamek" class="form-label">お客様名（カナ）</label>
                <input type="text" class="form-control required maxlength" id="usernamek" data-maxlength="10" name="usernamek" value="<?php echo $_SESSION['user_meikata'];?>" name="usernamek">
              </div>
              
              <div class="col-12">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control required email" id="email" autocomplete="new-password" size="30" name="email" value="<?php echo $_SESSION['user_mail'];?>" name="mail">
              </div>
              <div class="col-12">
                <label for="pass" class="form-label">パスワード</label>
                  <input type="text" class="form-control required maxlength" id="pass" placeholder="" required="" value="<?php echo $_SESSION['user_pass'];?>" name="passw">
              </div>
              <div class="row">
                <div class="col-3">
                  <label for="post" class="form-label">郵便番号</label>
                      <input type="text" class="form-control required maxlength" id="post" placeholder="" required="" value="<?php echo $_SESSION['user_addressnumber1'];?>" name="bangou1">
                </div>
                <div class="col-1">
                  <p class="text-success" style="margin-top: 35px;">ー</p>
                </div>  
                <div class="col-4" style="margin-top: 25px;">
                  <label for="username" class="form-label"></label>
                    <input type="text" class="form-control" id="username" placeholder="" required="" value="<?php echo $_SESSION['user_addressnumber2'];?>" name="bangou2">
                </div>
              </div>
              <div class="row">
              <div class="col-12">
                <label for="address" class="form-label">住所</label>
                <input type="text" class="form-control required maxlength" id="address" placeholder="" required="" value="<?php echo $_SESSION['user_address'];?>" name="address">
              </div>
              <div class="col-sm-12">
                <label for="tel" class="form-label">電話番号</label>
                <input type="text" class="form-control required tel" id="tel" placeholder="" required="" value="<?php echo $_SESSION['user_phone'];?>" name="phone">
              </div>

              <div class="col-3">
                <label for="birth" class="form-label">生年月日</label>
                <select class="form-select d-block w-100" id="birth" required="" name="year">
                <option selected><?php echo $_SESSION['user_year'];?></option>
                <option value="1900">1900</option><option value="1901">1901</option>
                <option value="1902">1902</option><option value="1903">1903</option>
                <option value="1904">1904</option><option value="1905">1905</option>
                <option value="1906">1906</option><option value="1907">1907</option>
                <option value="1908">1908</option><option value="1909">1909</option>
                <option value="1910">1910</option><option value="1911">1911</option>
                <option value="1912">1912</option><option value="1913">1913</option>
                <option value="1914">1914</option><option value="1915">1915</option>
                <option value="1916">1916</option><option value="1917">1917</option>
                <option value="1918">1918</option><option value="1919">1919</option>
                <option value="1920">1920</option><option value="1921">1921</option>
                <option value="1922">1922</option><option value="1923">1923</option>
                <option value="1924">1924</option><option value="1925">1925</option>
                <option value="1926">1926</option><option value="1927">1927</option>
                <option value="1928">1928</option><option value="1929">1929</option>
                <option value="1930">1930</option><option value="1931">1931</option>
                <option value="1932">1932</option><option value="1933">1933</option>
                <option value="1934">1934</option><option value="1935">1935</option>
                <option value="1936">1936</option><option value="1937">1937</option>
                <option value="1938">1938</option><option value="1939">1939</option>
                <option value="1940">1940</option><option value="1941">1941</option>
                <option value="1942">1942</option><option value="1943">1943</option>
                <option value="1944">1944</option><option value="1945">1945</option>
                <option value="1946">1946</option><option value="1947">1947</option>
                <option value="1948">1948</option><option value="1949">1949</option>
                <option value="1950">1950</option><option value="1951">1951</option>
                <option value="1952">1952</option><option value="1953">1953</option>
                <option value="1954">1954</option><option value="1955">1955</option>
                <option value="1956">1956</option><option value="1957">1957</option>
                <option value="1958">1958</option><option value="1959">1959</option>
                <option value="1960">1960</option><option value="1961">1961</option>
                <option value="1962">1962</option><option value="1963">1963</option>
                <option value="1964">1964</option><option value="1965">1965</option>
                <option value="1966">1966</option><option value="1967">1967</option>
                <option value="1968">1968</option><option value="1969">1969</option>
                <option value="1970">1970</option><option value="1971">1971</option>
                <option value="1972">1972</option><option value="1973">1973</option>
                <option value="1974">1974</option><option value="1975">1975</option>
                <option value="1976">1976</option><option value="1977">1977</option>
                <option value="1978">1978</option><option value="1979">1979</option>
                <option value="1980">1980</option><option value="1981">1981</option>
                <option value="1982">1982</option><option value="1983">1983</option>
                <option value="1984">1984</option><option value="1985">1985</option>
                <option value="1986">1986</option><option value="1987">1987</option>
                <option value="1988">1988</option><option value="1989">1989</option>
                <option value="1990">1990</option><option value="1991">1991</option>
                <option value="1992">1992</option><option value="1993">1993</option>
                <option value="1994">1994</option><option value="1995">1995</option>
                <option value="1996">1996</option><option value="1997">1997</option>
                <option value="1998">1998</option><option value="1999">1999</option>
                <option value="2000">2000</option><option value="2001">2001</option>
                <option value="2002">2002</option><option value="2003">2003</option>
                <option value="2004">2004</option><option value="2005">2005</option>
                <option value="2006">2006</option><option value="2007">2007</option>
                <option value="2008">2008</option><option value="2009">2009</option>
                <option value="2010">2010</option><option value="2011">2011</option>
                <option value="2012">2012</option><option value="2013">2013</option>
                <option value="2014">2014</option><option value="2015">2015</option>
                <option value="2016">2016</option><option value="2017">2017</option>
                <option value="2018">2018</option><option value="2019">2019</option>
                <option value="2020">2020</option><option value="2021">2021</option>
                <option value="2022">2022</option><option value="2023">2023</option>
                <option value="2024">2024</option><option value="2025">2025</option>
                <option value="2026">2026</option><option value="2027">2027</option>
                <option value="2028">2028</option><option value="2029">2029</option>
                <option value="2030">2030</option>
                </select>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">年</p>
              </div>
              <div class="col-3">
                <label for="mbirth" class="form-label" style="margin-top: 25px;"></label>
                <select class="form-select d-block w-100" id="mbirth" required="" name="month">
                <option selected><?php echo $_SESSION['user_month'];?></option>
                <option value="1">1</option><option value="2">2</option>
                <option value="3">3</option><option value="4">4</option>
                <option value="5">5</option><option value="6">6</option>
                <option value="7">7</option><option value="8">8</option>
                <option value="9">9</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>
                </select>
              </div>
              <div class="col-1">
              <p class="text-success" style="margin-top: 35px;">月</p>
              </div>
              <div class="col-3">
                <label for="dbirth" class="form-label" style="margin-top: 25px;"></label>
                <select class="form-select d-block w-100" id="dbirth" required="" name="day">
                <option selected><?php echo $_SESSION['user_day'];?></option>
                <option value="1">1</option><option value="2">2</option>
                <option value="3">3</option><option value="4">4</option>
                <option value="5">5</option><option value="6">6</option>
                <option value="7">7</option><option value="8">8</option>
                <option value="9">9</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>
                <option value="13">13</option><option value="14">14</option>
                <option value="15">15</option><option value="16">16</option>
                <option value="17">17</option><option value="18">18</option>
                <option value="19">19</option><option value="20">20</option>
                <option value="21">21</option><option value="22">22</option>
                <option value="23">23</option><option value="24">24</option>
                <option value="25">25</option><option value="26">26</option>
                <option value="27">27</option><option value="28">28</option>
                <option value="29">29</option><option value="30">30</option>
                <option value="31">31
                </select>
                </div>
                <div class="col-1">
                  <p class="text-success" style="margin-top: 35px;">日</p>
                </div>
              </div>
              <label for="seibetu" class="form-label">性別</label>
              <div class="my-3">
                <div class="form-check-inline">
                  <input id="man" name="paymentMethod" type="radio" class="form-check-input" required="" value="男性">
                  <label class="form-check-label" style="margin-right: 220px;" for="man">男性</label>
                </div>
                <div class="form-check-inline">
                  <input id="woman" name="paymentMethod" type="radio" class="form-check-input" required="" value="女性">
                  <label class="form-check-label" for="woman">女性</label>
                </div>
              </div>
              <div class="btna">
                <input class="btn text-white rounded-pill btn-lg" style="background-color: #800080;" type="submit" value="確認ページへ" onclick="location.href='register_fix_confirm.php'"><br>
              </div>
              <div class="btnb">
                  <input class="btn btn-outline-dark rounded-pill" style="background-color: #dcdcdc;" type="button" onclick="location.href = 'register_information.php'" value="戻る">
              </div>
            </form>
          </div>
        </div> 
      </main>
    </div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
	  <!-- JSの設定ファイル -->
  <script src="form-validation.js"></script>
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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
	<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
	<script src="https://bootstrap-guide.com/js/samples.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
    }); 
  </script>
</body>
</html>