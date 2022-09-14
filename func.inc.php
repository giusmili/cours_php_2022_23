<?php

    // function anonyme, flechées et nommée
     function user(int $_age, string $_nom){
        return $_age." ".$_nom;
     }

     user(15,"Doe");


    $_calc = function($_n){
        return $_n;
    };
    print $_calc(10)

    //référence

    $name = "Tony";
        
    $displayInfo = function() use (&$name){ /* 
        changement d'une référence &$name. On affiche Joe à la place d'Tony
        */
        echo sprintf("<br>Bonjour %s", $name);
    };
    $name = "Jon";
    $displayInfo("Tony"); //cela affichera Jon


    $_func = fn($_nombre) => $_nombre * $_nombre;
    print $_func(5);


?>