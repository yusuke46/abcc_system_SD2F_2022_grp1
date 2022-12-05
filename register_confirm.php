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
                <input type="text" class="form-control" id="pa" name="pa" value="<?php echo $_POST['pa'];  $_SESSION['pass'] = $_POST['pa'];?>" disabled>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
    }); 
  </script>
</body>
</html>