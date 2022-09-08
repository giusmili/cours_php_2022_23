<?php
const main_title = "PHP Started";
$_lang = ["fr","en","it"];
$_style = "./css/style.css";
$_version = phpVersion();
$_date = date('d-m-Y : H : i : s');
$_user_agent = $_SERVER['HTTP_USER_AGENT']; //variable d'environnement
$_addr = $_SERVER['REMOTE_ADDR'];
$_signature = $_SERVER['SERVER_SIGNATURE'];
$_copy_right = date('Y');
//define("MAIN_TITLE","PHP Started")
    class User{
        public $_presentation = "Hello!!!";
        static $_nombre = 2022;
    }
$_msg = new User
?>