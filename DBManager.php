<?php
class DBManeger{
    private function dbConnect(){
        $pdo= new PDO('mysql:host=localhost;dbname=osigoto;charset=utf8','webuser', 'abccsd2');
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

    public function getInsert(){
        $pdo = $this->dbConnect();
        $sql="INSERT INTO login_tbl (user_mei,user_meikata,user_e-mail,user_pass,user_address,user_phone,user_birth,user_gender) VALUES(?,?,?,?,?,?,?,?)";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(2,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(3,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(4,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(5,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(6,$_POST[''],PDO::PARAM_INT);
        $ps->bindValue(7,$_POST[''],PDO::PARAM_STR);
        $ps->bindValue(8,$_POST[''],PDO::PARAM_STR);
        $ps->execute();
        $searchArray= $ps->fetchAll();
        return $searchArray;
    }

    public function getDelete(){
        $pdo = $this->dbConnect();
        $sql="UPDATE login_tbl SET user_mei = '', user_meikata = '', user_e-mail = '', user_pass = '', user_address = '', user_phone = '', user_birth = '', user_gender = ''";
        $ps=$pdo->prepare($sql);
        $ps->execute();
        $searchArray= $ps->fetchAll();
        return $searchArray;
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
        $searchArray= $ps->fetchAll();
        return $searchArray;
    }

    public function getCheck($email){
        $pdo = $this->dbConnect();
        $sql="SELECT * FROM login_tbl WHERE user_e-mail = ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_POST[''],PDO::PARAM_STR);
        $ps->execute();
        $searchArray=$ps->fetchAll();
        return $searchArray;
    }
}
?>