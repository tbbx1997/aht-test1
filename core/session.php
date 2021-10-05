<?php
    class Session{
        public static function init(){
            session_start();
        }
        public static function setSession($key, $value){
           $_SESSION[$key] = $value;
        }
        public static function getSession($key){
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        public static function destroy(){
            session_destroy();
        }
        public static function unset($key){
            session_unset($key);
        }

    }
?>