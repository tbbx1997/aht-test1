<?php
require_once './models/DBConnect.php';
require_once './models/interface/InterfaceTemplate.php';
    class DatabaseModel extends DbConnect implements InterfaceTemplate{
        private $conn;
        public function __construct()
        {
            $this->connect();
        }
        public function connect(){
            $this->conn = $this->connectdatabase();
        }
        public function getList(){
            $conn = $this->connectdatabase();
            $sql = 'SELECT * FROM product';
            $result = $this->conn->query($sql);
            $row = array();
        if ($result->num_rows > 0) {
            while ($row = ($result)->fetch_assoc()) {
                $arrproduct[] = $row;
            }
            return $arrproduct;
        }
        $conn->close();
        }
        public function getListById(){}
        public function getUser(){}
        public function insert($dataArr){
            $sql = "INSERT INTO product 
            (`name_pd`,
             `title`,
             `featrure_image`,
             `prices`,
              `description_pd`,
              `created_date_pd`,
              `modified_date_pd`
              ) VALUES (
                  '".$dataArr['name']."',
                  '".$dataArr['title']."',
                  '".$dataArr['image']."',
                  '".$dataArr['price']."',
                  '".$dataArr['description']."',
                  '".$dataArr['created']."',
                  '".$dataArr['modified']."')";

              $result = $this->conn->query($sql);
              return $result;

        }
        public function update(){
            $sql = "SELECT * FROM product WHERE id_pd = '{$_GET['id']}'";
            $result = $this->conn->query($sql);
            return $result->fetch_assoc();
        }
        public function do_update($dataArr){
            $sql = "UPDATE product SET name_pd = '".$dataArr['name']."',
             title ='".$dataArr['title']."',
              featrure_image ='".$dataArr['image']."',
               prices ='".$dataArr['price']."',
                description_pd ='".$dataArr['description']."',
                 created_date_pd ='".$dataArr['created']."',
                  modified_date_pd ='".$dataArr['modified']."' WHERE id_pd = '{$_GET['id']}'";
            $result = $this->conn->query($sql);
            return $result;
        }
        public function delete($id){
            $sql = "DELETE FROM product WHERE id_pd = '" . $id . "'";
            $result = $this->conn->query($sql);
            return $result;

        }
    }
?>