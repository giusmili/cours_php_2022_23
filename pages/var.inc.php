<?php
     const title = "PHP started";
     $_lang = ["fr","gb","it"];
     $_style = "./css/style.css";
     $_version = phpversion();
     $_date = date('d-m-Y : H : i : s');
     $_user_agent = $_SERVER['HTTP_USER_AGENT'];
     $_signature = $_SERVER['SERVER_SIGNATURE'];
     $_addr = $_SERVER['REMOTE_ADDR'];
     $_copyright = date('Y');

     //class
     class User{
        static $_nombre = 2022;
        public $_presentation = "Hello!!!";
    }
    $_msg = new User;
?>