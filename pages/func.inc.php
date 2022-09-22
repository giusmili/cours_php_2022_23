<?php

    // function anonyme, flechées et nommée
    
     function user(int $_age, string $_nom){
        return $_age." ".$_nom;
     }

    user(15,"Doe");


    $_calc = function($_n){ //fonction anonyme
        return $_n;
    };
    print $_calc(10)

    //référence

    $_name = "Tony";
        
    $_displayInfo = function() use (&$_name){ /* 
        changement d'une référence &$name. On affiche Joe à la place d'Tony
        */
        echo sprintf("<br>Bonjour %s", $_name);
    };
    //renommer la variable $_name
    $_name = "Jon";
    $_displayInfo("Tony"); //cela affichera Jon

    
    $_func = fn($_nombre) => $_nombre * $_nombre;
    print $_func(5); //cela affiche 25

    
    
    $date = new DateTime; // instance de DateTime
    echo $date->format('d/m/Y'); //exemple de function lié à un objet dans ce cas est appelé méthode

 ?


?>