<?php 
  session_start();
require_once('models/DatabaseModel.php');
require_once('models/UserModel.php');
require_once('views/View.php');
require_once './core/session.php';
class HomeController extends Session {
    var $model, $view, $mduser;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new DatabaseModel();
        $this->mduser = new UserModel();
    }
    public function index(){
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'home':{
                    $this->home();
                    break;
                }
                case 'login':
                    $err = "input is empty!";
                    if(isset($_POST['submit_login'])){
                        if(empty($_POST['email']) || empty($_POST['password'] )){
                            echo $err;
                        } else{
                            $result=$this->mduser->do_login($_POST);
                           if ($result>0) {
                            Session::setSession('login',$result);
                       
                            if($result['level']==1){
                                header('Location:?action=user-client');
                            }
                            if($result['level']==0){
                                header('Location:?action=admin');
                            }
                           }
                        }      
                    }
                    
                    include_once'./templates/login.php';
                    break;
                
            
                case 'logout':{
                    $this->logout();
                    break;
                }
                case 'register':{
                    $this->register();
                    break;
                }
                case 'admin':{
                    $this->admin();
                    break;
                }
                case 'user-client':{
                    $this->user_client();
                    break;
                }
                case 'do-register':{
                    $this->doRegister();
                    break;
                }
                case 'list-user':{
                    $this->list_user();
                    break;
                }
                case 'insert-product':{
                    $this->insert_product();
                    break;
                }
                case 'do-insert':{
                    $this->do_insert_pd();
                    break;
                }
                case 'insert-user':{
                    $this->insertUser();
                    break;
                }
                case 'do-insert-user':{
                    $this->do_insert_user();
                    break;
                }
                case 'update-product':{
                    $this->updateProduct();
                    break;
                }
                case 'do-update':{
                    $this->do_update();
                    break;
                }
                case 'update-user':{
                    $this->updateUser();
                    break;
                }
                case 'do-update-user':{
                    $this->do_updateUser();
                    break;
                }
                case 'delete-product':{
                    $this->deleteProduct();
                    break;
                }
                case 'delete-user':{
                    $this->deleteUser();
                    break;
                }
            }
        } else {
            $this->home();
        }

    }
    public function home(){
        $result = $this->model->getList();
        $this->view->view_home_page($result);
    }
    public function logout(){
        self::init();
        self::destroy();
    }
    public function register(){
        $this->view->view_register();
    }
    public function doRegister(){
        $username = $pass = $email = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST['username'])) {
                echo "*name empty";
            }else{
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            }
            if (isset($_POST['password'])) {
                echo "*name empty";
            }else{
                $pass = md5(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
            }
            if (isset($_POST['email_address'])) {
                echo "*name empty"; 
            }else{
                $email = filter_var($_POST['email_address'], FILTER_SANITIZE_STRING);
            }
            $created_date = date("Y-m-d");
            $updated_date = date("Y-m-d");
            $dataArr = array(
                'username' => $username,
                'password' => $pass,
                'email_address' => $email,
                'created_date' => $created_date,
                'updated_date' => $updated_date
            ); 
            
                $result = $this->mduser->do_register($dataArr);
                $message = "Success !";
                echo "<script type='text/javascript'>alert('$message');</script>";
              
        }
        header('location:?action=login');
    }
    public function admin(){
        $result = $this->model->getList();
        $this->view->view_admin_home($result);
    }
    public function user_client(){
        $result = $this->model->getList();
        $this->view->view_user_client_page($result);
    }
    public function list_user(){
        $result = $this->mduser->getUser();
        $this->view->view_list_user($result);
    }
    public function insert_product(){
        $this->view->view_insert_product();
    }
    public function do_insert_pd(){
        $name = $title = $image = $price = $description = $created = $modified = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST['name'])) {
                echo '* pls correct';
            }else{
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['title'])) {
                echo 'pls correct';
            }else{
                $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['image'])) {
                echo 'pls correct';
            }else{
                $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['price'])) {
                echo 'pls correct';
            }elseif($_POST['price'] && $_POST['price'] > 0){
                $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
            }
            if (empty($_POST['description'])) {
                echo 'pls correct';
            }else{
                $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            }
            $created = date("Y-m-d");
            $modified = date("Y-m-d");
            $dataArr = array(
                'name' => $name,
                'title' => $title,
                'price' => $price,
                'image' => $image,
                'description' => $description,
                'created' => $created,
                'modified' => $modified
            ); 
            $result = $this->model->insert($dataArr);
            $message = "Success!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:?action=admin');
        }else{
            $this->insert_product();

        }
    }
    public function updateProduct(){
        $result = $this->model->update();
        $this->view->view_update_product($result);
    }
    public function do_update(){
        $name = $title = $image = $price = $description = $created = $modified ='';
        if (isset($_POST['submit'])) {
            if (empty($_POST['name'])) {
                echo '* pls correct';
            }else{
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['title'])) {
                echo 'pls correct';
            }else{
                $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['image'])) {
                echo 'pls correct';
            }else{
                $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['price'])) {
                echo 'pls correct';
            }elseif($_POST['price'] && $_POST['price'] > 0){
                $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
            }
            if (empty($_POST['description'])) {
                echo 'pls correct';
            }else{
                $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            }
            $created = filter_var($_POST['created'], FILTER_SANITIZE_STRING);
            $modified = filter_var($_POST['modified'], FILTER_SANITIZE_STRING);
            $dataArr = array(
                'name' => $name,
                'title' => $title,
                'price' => $price,
                'image' => $image,
                'description' => $description,
                'created' => $created,
                'modified' => $modified
            ); 

            $result = $this->model->do_update($dataArr);
            if ($result) {
                $message = " Success!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header('location:?action=admin');
            }
        }
    }
    public function insertUser(){
        $this->view->view_insert_user();
    }
    public function do_insert_user(){
        $name = $pass = $email = $level = $created = $updated = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST['username'])) {
                echo '* pls correct';
            }else{
                $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['password'])) {
                echo 'pls correct';
            }else{
                $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['email-address'])) {
                echo 'pls correct';
            }else{
                $email = $_POST['email-address'];
            }
            if (empty($_POST['level'])) {
                echo 'pls correct';
            }elseif($_POST['level'] && $_POST['level'] <2){
                $level = filter_var($_POST['level'], FILTER_VALIDATE_FLOAT);
            }
            $created = date("Y-m-d");
            $updated = date("Y-m-d");
            $dataArr = array(
                'username' => $name,
                'password' => $pass,
                'email-address' => $email,
                'level' => $level,
                'created' => $created,
                'updated' => $updated
            ); 
            $result = $this->mduser->insert($dataArr);
            $message = "Success!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:?action=list-user');
        }
    }
    public function updateUser(){
        $result = $this->mduser->update();
        $this->view->view_update_user($result);
    }
    public function do_updateUser(){
        $name = $pass = $email = $level = $created = $updated = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST['username'])) {
                echo '* pls correct';
            }else{
                $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['password'])) {
                echo 'pls correct';
            }else{
                $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            }
            if (empty($_POST['email-address'])) {
                echo 'pls correct';
            }else{
                $email = $_POST['email-address'];
            }
            if (empty($_POST['level'])) {
                echo 'pls correct';
            }elseif($_POST['level'] && $_POST['level'] <2){
                $level = filter_var($_POST['level'], FILTER_VALIDATE_FLOAT);
            }
            $created = date("Y-m-d");
            $updated = date("Y-m-d");
            $dataArr = array(
                'username' => $name,
                'password' => $pass,
                'email-address' => $email,
                'level' => $level,
                'created' => $created,
                'updated' => $updated
            ); 
            $result = $this->mduser->do_updateUser($dataArr);
            $message = "Success!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:?action=list-user');
        }
    }
    public function deleteProduct(){
        $id = $_GET['id'];
        $result = $this->model->delete($id);
        if ($result) {
            $message = "Delete Success!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:?action=admin');
        }
        
    }
    public function deleteUser(){
        $id = $_GET['id'];
        $result = $this->mduser->delete($id);
        if ($result) {
            $message = "Delete Success!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:?action=list-user');
        }
        
    }
}
?>