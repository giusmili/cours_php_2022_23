<?php
    //function nommées, anonymes, paramètres
    
    function user(int $_age, string $_first_name){
        return $_age." ".$_first_name;
    }
    //affichage
    print user(15,"Tony")."<br>";

    //function anonyme
    $_calc = function(int $_n){
        return $_n * $_n;
    };

    print "result ".$_calc(10)."<br>";

     //changement de réference de variable
     $_names = "Tony";
     $_info = function() use (&$_names){
        echo sprintf("Bonjour %s", $_names);
     };
     $_names = "Alex";
     $_info("Tony");

     //function fléchée
     //let x = (a, b) => {};
     $_calc = fn($_nombre)=>$_nombre * $_nombre;
     print "<br> Resultat : ".$_calc(5);

     //méthode
     $_date = new DateTime; //instance
     print "<br>".$_date->format('d/m/Y');



     



