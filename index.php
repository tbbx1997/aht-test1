<?php 
   require_once('controllers/HomeController.php');
   $home_page = new HomeController();
   $home_page->index();
?>