<?php
    class View{
        public function view_home_page($result){
            require_once 'templates/home.php';
        }
        public function view_login($result){
            require_once 'templates/login.php';
        }
        public function view_register(){
            require_once 'templates/register.php';
        }
        public function view_admin_home($result){
            require_once './templates/layouts/admins/adminHome.php';
        }
        public function view_user_client_page($result){
            require_once './templates/layouts/clients/userClient.php';
        }
        public function view_list_user($result){
            require_once './templates/layouts/admins/listUser.php';
        }
        public function view_insert_product(){
            require_once './templates/layouts/admins/insertProduct.php';
        }
        public function view_insert_user(){
            require_once './templates/layouts/admins/insertUser.php';
        }
        public function view_update_product($result){
            require_once './templates/layouts/admins/updateProduct.php';
        }
        public function view_update_user($result){
            require_once './templates/layouts/admins/updateUser.php';
        }
    }
?>