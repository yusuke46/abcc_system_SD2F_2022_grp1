<?php
class DBManager{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=osigoto;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    public function getSearch($category,$detail,$keyword){
        if($_POST['']==' '&&$_POST['']==' '&&$_POST['']==' '){
            echo '検索結果がありませんでした';
        }else if($_POST['']==' '&&$_POST['']==' '&&$_POST['']!=' '){
            $pdo = $this->dbConnect();
            $sql="SELECT * FROM shohin_tbl WHERE shohin_mei LIKE ?";
            $ps=$pdo->prepare($sql);
            $ps->bindValue(1,'%'.$_POST[''].'%',PDO::PARAM_STR);
            $ps->execute();
            $result=$ps->fetchAll();
            foreach($result as $row){
                $result = $row['shohin_mei'].$row['shohin_tanka'].$row['shohin_img'];
                return $result;
            }
        }else if($_POST['']!=' '&&$_POST['']!=' '&&$_POST['']==' '){
            $pdo = $this->dbConnect();
            $sql="SELECT * FROM shohin_tbl WHERE shohin_industry = ? AND shohin_detail = ?";
            $ps=$pdo->prepare($sql);
            $ps->bindValue(1,$_POST[''],PDO::PARAM_STR);
            $ps->bindValue(2,$_POST[''],PDO::PARAM_STR);
            $ps->execute();
            $result=$ps->fetchAll();
            foreach($result as $row){
                $result = $row['shohin_mei'].$row['shohin_tanka'].$row['shohin_img'];
                return $result;
            }
        }else{
            $pdo = $this->dbConnect();
            $sql="SELECT * FROM shohin_tbl WHERE shohin_industry = ? AND shohin_detail = ? OR shohin_mei LIKE ?";
            $ps=$pdo->prepare($sql);
            $ps->bindValue(1,$_POST[''],PDO::PARAM_STR);
            $ps->bindValue(2,$_POST[''],PDO::PARAM_STR);
            $ps->bindValue(3,'%'.$_POST[''].'%',PDO::PARAM_STR);
            $ps->execute();
            $result=$ps->fetchAll();
            foreach($result as $row){
                $result = $row['shohin_mei'].$row['shohin_tanka'].$row['shohin_img'];
                return $result;
            }
        }
    }

    public function getInsert($user,$usernamek,$email,$passw,$bangou1,$bangou2,$address,$phone,$year,$month,$day,$gender){
        $pdo = $this->dbConnect();
        $sql="INSERT INTO login_tbl (user_mei,user_meikata,user_e-mail,user_pass,user_addressnumber1,user_addressnumber2,user_address,user_phone,user_year,user_month,user_day,user_gender) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_POST['user'],PDO::PARAM_STR);
        $ps->bindValue(2,$_POST['usernamek'],PDO::PARAM_STR);
        $ps->bindValue(3,$_POST['email'],PDO::PARAM_STR);
        $ps->bindValue(4,$_POST['passw'],PDO::PARAM_STR);
        $ps->bindValue(5,$_POST['bangou1'],PDO::PARAM_STR);
        $ps->bindValue(6,$_POST['bangou2'],PDO::PARAM_STR);
        $ps->bindValue(7,$_POST['address'],PDO::PARAM_STR);
        $ps->bindValue(8,$_POST['phone'],PDO::PARAM_STR);
        $ps->bindValue(9,$_POST['year'],PDO::PARAM_INT);
        $ps->bindValue(10,$_POST['month'],PDO::PARAM_INT);
        $ps->bindValue(11,$_POST['day'],PDO::PARAM_INT);
        $ps->bindValue(12,$_POST['gender'],PDO::PARAM_STR);
        $ps->execute();
        $Insert=$ps->fetchAll();
        return $Insert;
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
        $ps->bindValue(1,$_POST['shohinid'],PDO::PARAM_STR);
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
        $sql = "INSERT INTO login_tbl (user_mei,user_meikata,user_email,user_pass,user_post1,user_post2,user_address,user_phone,user_year,user_month,user_day,user_gender) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
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
}
?>