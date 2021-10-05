<?php 
require_once './models/DBConnect.php';
require_once './models/interface/InterfaceTemplate.php';
    class UserModel extends DbConnect implements InterfaceTemplate{
        private $conn;
        public function __construct()
        {
            $this->connect();
        }
        public function connect(){
            $this->conn = $this->connectdatabase();
        }
        public function getList(){} 
        public function getListById(){}
        public function getUser(){
            $sql = 'SELECT * FROM user';
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = ($result)->fetch_assoc()) {
                    $listUser[] = $row;
                }
                return $listUser;
            }
        }
        public function do_login(){
            $sql = "SELECT *
                      FROM user 
                      WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
            $result = $this->conn->query($sql);
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
            return false;
        }
        public function do_register($dataArr){
            $sql = "INSERT INTO user (`name`, `email`, `password`, `level`, `created_date`, `updated_date`)
                      VALUES ('".$dataArr['username']."','".$dataArr['email_address']."', '".$dataArr['password']."', '1', '".$dataArr['created_date']."','".$dataArr['updated_date']."')";
            $result = $this->conn->query($sql);
            return $result;
        }
        public function insert($dataArr){
            $sql = "INSERT INTO user (`name`, `email`, `password`, `level`, `created_date`, `updated_date`)
            VALUES ('".$dataArr['username']."','".$dataArr['email-address']."', '".$dataArr['password']."', '".$dataArr['level']."', '".$dataArr['created']."','".$dataArr['updated']."')";
            $result = $this->conn->query($sql);
  return $result;
        }
        public function update(){
            $sql = "SELECT * FROM user WHERE id = '{$_GET['id']}'";
            $result = $this->conn->query($sql);
            return $result->fetch_assoc();
        }
        public function do_updateUser($dataArr){
            $sql = "UPDATE user SET name = '".$dataArr['username']."',
            email ='".$dataArr['email-address']."',
             password ='".$dataArr['password']."',
              level ='".$dataArr['level']."',
                created_date ='".$dataArr['created']."',
                 updated_date ='".$dataArr['updated_Date']."' WHERE id = '{$_GET['id']}'";
           $result = $this->conn->query($sql);
           return $result;
        }
        public function delete($id){
            $sql = "DELETE FROM user WHERE id = '" . $id . "'";
            $result = $this->conn->query($sql);
            return $result;
        }
    }
?>