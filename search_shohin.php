<?php session_start();?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .pickup{
          text-align: center;
          margin-top: 10%;
          margin-bottom: 10%;
        }
        .card{
          margin-bottom: 10%;
        }
        .img{
        width: 200px;
        height: 200px;
      }
        </style>
</head>
<body>
    <!--ここからNB-->
    <?php
if(isset($_SESSION['user_id'])){
  include_once 'navar_success.php';
}else{
  include_once 'navar.php';
}
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="pickup">商品一覧</h2>
      </div>
      <?php
      require_once 'DBManager.php';
      $dbmng = new DBManager();
      $result = $dbmng->getSearch($_POST['kid']);
      foreach($result as $row): ?>
        <div class="col-md-4">
          <form action="shohin_detail.php" method="post">
            <div class="card" style="width: 26rem;">
              <button type="submit" class="border border-white" style="background-color: white;">
                <input type="hidden" value="<?php echo $row['shohin_id']; ?>" name="shohinid">
                <input type="hidden" value="<?php echo $row['shohin_information']; ?>" name="information">
                <img src="<?php echo $row['shohin_img']; ?>" class="card-img-top" name="img">
                <div class="card-body">
                  <h5 class="card-title" name="mei"><?php echo $row['shohin_mei']; ?></h5>
                  <input type="hidden" value="<?php echo $row['shohin_id']; ?>">
                  <p class="card-text" name="tanka">￥<?php echo $row['shohin_tanka']; ?></p>
                </div>
              </button>
            </div>
          </form>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
    <!--ここまでcard-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .nav, .hamburger-demo-cover').toggleClass('show');
    }); 
  </script>
</body>
    </html>
    
