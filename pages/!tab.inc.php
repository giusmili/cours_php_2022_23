<?php
  
    //fonction d'encodage des caractères
   /*  $url = "https://www.google.com/search?q=html";
    $origin = "j'ai \"sortie\" le <strong>chien</strong> tout à l'heure";
    print urlencode($url);
    $_printout = htmlentities($origin);
    print "<br>".$_printout; */
    
  // Your code here!
   $_table_lang = ["html", "php", "js"];
   $_table_pays = ["fr", "it", "us"];
   $_table_global_info =[];

   $_table_global_info=array_merge($_table_lang,  $_table_pays);
   //array_push($table_lang, "Python");

   array_unshift($_table_global_info,"javascript"); //ajouter un élément au début
   /* array_shift($_tab); //supprime le premier élément du tableau
   array_pop($_tab); //supprime le dernier élément du tableau
   print_r($table_lang);
   print "\n".$table_lang[0];
   print_r($table_global_info); */
   
   /*for($i = 0; $i < count($table_global_info); $i++){
       print "\n".($i+1)." : ".$table_global_info[$i];
   }*/

   print "<ul>";
   $i = 0;
    while( $i < count($_table_global_info)){
        print "<li>".$_table_global_info[$i]."</li>";
        $i++;
        
    }
    print "</ul>";
    //fin de la 1reme partie

    const user = array(
          "firstName"=>"Rasmus",
          "lastname" => "Ledorf",
          "date" => 1994  );
    
          print_r(user);

        foreach(user as $key => $value){
          print "\n".$key." ".$value;
          
        }
      /*
     
      tableau multidimentionnel
      
      */
      $_supertab = [
                  1=>array("code"=>"html","statut"=>true),
                  2=>array("code"=>"js","statut"=>false),
                  3=>array("code"=>"php","statut"=>true)
              ];
     // print_r($_supertab);
     // faire un foreach ici
     print "<ul>";
     foreach($_supertab as $_key_1 => $_index){ //variable la cle => index
        foreach($_index as $_key_2 => $_value){//index la nouvelle cle nouvelle valeur
            print "<li>".$_key_2." ".$_value."</li>";
            //print_r($index);
        }
    }
    print "</ul>";
     
    $help = count($_supertab); //nombre d'éléménts
    print "\n".$help;
  
     // the last array
     const user_code = [
          "nom"=>"Ledorf",
          "prenom"=>"Rasmus",
          "mail"=>"l.rasmus@php.net"
    ];
    print count(user_code);
    print "<pre>";
    print_r(user_code);
    print "</pre>";
     
    print "<ul>\n";
  
        foreach (user_code as $key => $value) {
            //condition pour afficher le contact dans un lien
            // $key!="mail" ? print "<li>".$key." : ".$value."</li>" : print '<li>'.$key.' : <a href="mailto:'.$value.'">contact</a></li>';
        $key!="mail" ? print "<li>".$key." : ".$value."</li>\n" : 
        print '<li>'.$key.' : <a href="mailto:'.$value.'">'.$value.'</a></li>';
            
    }
    print "</ul>\n";
  
  
     
     
  
?>
  
