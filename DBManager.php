<?php
class DBManager{
    private function dbConnect(){
        //$pdo = new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418475-osigoto;charset=utf8','LAA1418475','2101427');
        $pdo= new PDO('mysql:host=localhost;dbname=osigoto;charset=utf8','webuser', 'abccsd2');
        return $pdo;
    }

    public function getSearch($keyword){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_information LIKE ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,'%'.$keyword.'%',PDO::PARAM_STR);
        $ps->execute();
        $result=$ps->fetchAll();
        return $result;
    }

    public function insertCart($userid,$shohinid,$shohin,$tanka,$img,$count,$subtotal){
        $pdo = $this->dbConnect();
        $sql="INSERT INTO cart_tbl (cart_user_id,cart_shohin_id,cart_shohin_mei,cart_shohin_tanka,cart_shohin_img,cart_shohin_count,cart_subtotal) VALUES(?,?,?,?,?,?,?)";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$userid,PDO::PARAM_INT);
        $ps->bindValue(2,$shohinid,PDO::PARAM_INT);
        $ps->bindValue(3,$shohin,PDO::PARAM_STR);
        $ps->bindValue(4,$tanka,PDO::PARAM_INT);
        $ps->bindValue(5,$img,PDO::PARAM_STR);
        $ps->bindValue(6,$count,PDO::PARAM_INT);
        $ps->bindValue(7,$subtotal,PDO::PARAM_INT);
        $ps->execute();
        $Insert=$ps->fetchAll();
    }

    public function getCart($cartid){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM cart_tbl WHERE cart_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$cartid,PDO::PARAM_INT);
        $ps->execute();
        $userShohin=$ps->fetchAll();
        return $userShohin;
    }

    public function getCount($shocount,$subtotal,$cartid){
        $pdo = $this->dbConnect();
        $sql="UPDATE cart_tbl SET cart_shohin_count = ?, cart_subtotal = ? WHERE cart_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$shocount,PDO::PARAM_INT);
        $ps->bindValue(2,$subtotal,PDO::PARAM_INT);
        $ps->bindValue(3,$cartid,PDO::PARAM_INT);
        $ps->execute();
        $count=$ps->fetchAll();
        return $count;
    }

    public function getSum($userid){
        $pdo = $this->dbConnect();
        $sql="SELECT SUM(cart_shohin_count) FROM cart_tbl WHERE cart_user_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$userid,PDO::PARAM_INT);
        $ps->execute();
        $userShohin=$ps->fetchAll();
        return $userShohin;
    }

    public function gettotalSum(){
        $pdo = $this->dbConnect();
        $sql="SELECT SUM(cart_subtotal) FROM cart_tbl";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $totalsum=$ps->fetchAll();
        return $totalsum;
    }

    public function deleteUserCart($userid){
        $pdo = $this->dbConnect();
        $sql="DELETE FROM cart_tbl WHERE cart_user_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$userid,PDO::PARAM_INT);
        $ps->execute();
        $userShohin=$ps->fetchAll();
        return $userShohin;
    }

    public function deleteCart(){
        $pdo = $this->dbConnect();
        $sql="DELETE FROM cart_tbl WHERE cart_id NOT IN (SELECT min_id from (SELECT MIN(cart_id) min_id FROM cart_tbl GROUP BY cart_shohin_id, cart_shohin_mei,cart_shohin_tanka) tmp);";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $userShohin=$ps->fetchAll();
    }

    public function getUserShohin($user){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM cart_tbl WHERE cart_user_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$user,PDO::PARAM_INT);
        $ps->execute();
        $userShohin=$ps->fetchAll();
        return $userShohin;
    }

    public function getDelete(){
        $pdo = $this->dbConnect();
        $sql="UPDATE login_tbl SET user_mei = '', user_meikata = '', user_e-mail = '', user_pass = '', user_address = '', user_phone = '', user_birth = '', user_gender = ''";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $Delete= $ps->fetchAll();
        return $Delete;
    }

    public function getUpdate(){
        $pdo = $this->dbConnect();
        $sql="UPDATE login_tbl SET user_mei = '?', user_meikata = '?', user_e-mail = '?', user_address = '?', user_phone = '?', user_birth = '?', user_gender = '?'";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(2,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(3,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(4,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(5,$_POST[''],PDO::PARAM_INT);
        $ps->bindValue(6,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(7,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(8,$_POST[''],PDO::PARAM_STR);
        $ps->execute();
        $Update= $ps->fetchAll();
        return $Update;
    }

    public function getCheck($email){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM login_tbl WHERE user_mail = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_POST['email'],PDO::PARAM_STR);
        $ps->execute();
        $searchArray=$ps->fetchAll();
        return $searchArray;
    }

    public function getByCartShohinSourse($id){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$id,PDO::PARAM_STR);
        $ps->execute();
        $array=$ps->fetchAll();
        return $array;
    }

    public function topPickUp(){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_attention = 1 ORDER BY shohin_id DESC LIMIT 12";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $PickUp=$ps->fetchAll();
        return $PickUp;
    }

    public function searchPickUp(){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_attention = 1";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $PickUp=$ps->fetchAll();
        return $PickUp;
    }

    public function topFeature(){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_feature = 1 ORDER BY shohin_id DESC LIMIT 12";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $Feature=$ps->fetchAll();
        return $Feature;
    }

    public function searchFeature(){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_feature = 1";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $Feature=$ps->fetchAll();
        return $Feature;
    }

    public function getByShohinSource(){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $ShohinSource=$ps->fetchAll();
        return $ShohinSource;
    }

    public function getByMemeber(){
        $pdo = $this->dbConnect();
        $sql="";
    }

    public function getByShohin($shohin){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$shohin,PDO::PARAM_STR);
        $ps->execute();
        $Shohin=$ps->fetchAll();
        return $Shohin;
    }


    
    public function getLogin($name,$namek,$mail,$pass,$post1,$post2,$address,$phone,$year,$month,$day,$sei){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO login_tbl (user_mei,user_meikata,user_mail,user_pass,user_addressnumber1,user_addressnumber2,user_address,user_phone,user_year,user_month,user_day,user_gender) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$name,PDO::PARAM_STR);
        $ps->bindValue(2,$namek,PDO::PARAM_STR);
        $ps->bindValue(3,$mail,PDO::PARAM_STR);
        $ps->bindValue(4,$pass,PDO::PARAM_STR);
        $ps->bindValue(5,$post1,PDO::PARAM_STR);
        $ps->bindValue(6,$post2,PDO::PARAM_STR);
        $ps->bindValue(7,$address,PDO::PARAM_STR);
        $ps->bindValue(8,$phone,PDO::PARAM_STR);
        $ps->bindValue(9,$year,PDO::PARAM_STR);
        $ps->bindValue(10,$month,PDO::PARAM_STR);
        $ps->bindValue(11,$day,PDO::PARAM_STR);
        $ps->bindValue(12,$sei,PDO::PARAM_STR);
        $ps->execute();
    }

    public function Delete($userid){
        $pdo = $this->dbConnect();
        $sql = "UPDATE login_tbl SET user_mei = '',user_meikata = '',user_mail = '',user_pass = '',user_addressnumber1 = '',user_addressnumber2 = '',user_address = '',user_phone = '',user_year = '',user_month = '',user_day = '',user_gender = '' WHERE user_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$userid,PDO::PARAM_INT);
        $ps->execute();
    }

    public function insertOrder($name,$tanka,$suu,$uid,$img,$subtotal){
        $pdo = $this->dbConnect();
        $sql="INSERT INTO order_tbl (shohin_name,shohin_tanka,order_date,shohin_suu,user_id,shohin_img,order_subtotal) VALUES(?,?,?,?,?,?,?)";
        $ps=$pdo->prepare($sql);
        $date = date("Y/m/d");
        $ps->bindValue(1,$name,PDO::PARAM_STR);
        $ps->bindValue(2,$tanka,PDO::PARAM_INT);
        $ps->bindValue(3,$date,PDO::PARAM_STR);
        $ps->bindValue(4,$suu,PDO::PARAM_INT);
        $ps->bindValue(5,$uid,PDO::PARAM_INT);
        $ps->bindValue(6,$img,PDO::PARAM_STR);
        $ps->bindValue(7,$subtotal,PDO::PARAM_INT);
        $ps->execute();
        $Insert=$ps->fetchAll();
    }

    public function getOrder($id){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM order_tbl WHERE user_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$id,PDO::PARAM_STR);
        $ps->execute();
        $searchArray=$ps->fetchAll();
        return $searchArray;
    }

    public function getOrderdetail($id){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM order_tbl WHERE order_id = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$id,PDO::PARAM_STR);
        $ps->execute();
        $searchArray=$ps->fetchAll();
        return $searchArray;
    }

    public function getByOsigotoSource($osigoto){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_industry = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$osigoto,PDO::PARAM_STR);
        $ps->execute();
        $ShohinSource=$ps->fetchAll();
        return $ShohinSource;
    }

    public function getByWotakuSource($wotaku){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM shohin_tbl WHERE shohin_detail = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$wotaku,PDO::PARAM_STR);
        $ps->execute();
        $ShohinSource=$ps->fetchAll();
        return $ShohinSource;
    }
}
?>