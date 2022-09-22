<?php
    print "le code suivant";

//tableaux
$_table_lang = ["html", "php", "js"];
$_table_lang_pays = ["en","it","fr"];
/* print "<pre>";
    var_dump($_table_lang);
print "</pre>";
print "<pre>";
    print_r($_table_lang );
print "</pre>";
print count($_table_lang);
 */
//$_add_value = array_push($_table_lang, "Python");


array_unshift($_table_lang, "Python"); //array_pop, array_shift
print "<pre>";
    var_dump($_table_lang);
print "</pre>";
$_langs = [];
$_langs = array_merge($_table_lang, $_table_lang_pays); //fusionner les tabelaux
print "<pre>";
    print_r($_langs);
print "</pre>";

print "<ul>";
    /* for($_i = 0; $_i < count($_langs); $_i++){
        print "<li>".$_langs[$_i]."</li>\n";//erreur syntaxe    
    } */
   $_i = 0;
    while($_i < count($_langs)){
        print "<li>".$_i." ".$_langs[$_i]."</li>\n";//erreur syntaxe   
        $_i++;
    }
   

print "</ul>";
    //tableaux assoc const user array()
    const user = [
        "Nom" => "Ledorf",
        "Prénom" => "Rasmus",
        "date" => 1994,
        "mail" => "l.rasmus@php.net"
    ];
    print "<pre>";
        print_r(user);
    print "</pre>";

    print "<ul>";
        foreach(user as $_key => $_value){
           $_key !== "mail" ? print "<li>".$_key." ".$_value."</li>":
           print '<li>'.$_key.' <a href="mailto:'.$_value.'">'.$_value.'</a></li>';
                
         }
    print "</ul>";
    
    /* Tableau multidimensionnel */

    $_supertab = array(
        1=>array("code"=>"html","statut"=>"ok"),
        2=>array("code"=>"js","statut"=>"ok"),
        3=>array("code"=>"php","statut"=>"ko")
    );
    /* afficher clé et valeur */
    print "<pre>";
        print_r($_supertab );
    print "</pre>";
    /* afficher dans une liste html */
    print "<ul>";
    foreach($_supertab as $_key => $_index){
        foreach($_index as $_key_1 => $_valeur){
            print "<li>".$_key_1." ".$_valeur."</li>";
        }
    }
    print "</ul>";






