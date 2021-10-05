<?php 
    class DbConnect{
        public function connectdatabase(){
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $conn = new mysqli($servername, $username, $password, 'aht_training_db');
            if ($conn->connect_error) {
                echo "connected fail" . mysqli_connect_error();
            }
            return $conn;
        }
    }
?>