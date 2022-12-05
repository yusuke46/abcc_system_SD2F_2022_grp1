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

<?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
  $('.nav_toggle').on('click', function () {
    $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
  }); 
</script>
</body>
    </html>
  
