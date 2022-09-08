<?php
    const title ="PHP started";
    $_version = phpVersion();
    $_style = "./css/style.css";
    $_agent = $_SERVER['HTTP_USER_AGENT'];
    $_date = date('d/m/Y/ h : i : s');
    $_signature = $_SERVER['SERVER_SIGNATURE'];
    $_copy_right = date('Y');
    $_lang = ["fr","en","it"];

    /* class static */
    class User{
        public $_test = "Hello!!!";
        static $_nombre = 2022;
    }
    $_msg = New User;

    
?>
<!DOCTYPE html>
<html lang="<?= $_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= User::$_nombre." ".title ?>
    </title>
    <link rel="stylesheet" href="<?= $_style ?>">
</head>
<body>
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<header>
		<h1>
            <?= $_msg->_test." ".title ?> version <?php print $_version ?>
        </h1>
	</header>
	<main>
        <figure>
            <img src="./asset/a.png" alt="cover php">
            <figcaption>
                <h2>
                    Votre version php est la <?= $_version ?>
                </h2>
            </figcaption>
        </figure>
		<section>
			<h2>Votre connexion du : <?= $_date ?></h2>
			<p>
				Votre navigateur est : <?= $_agent ?><br>
				Votre adress IP est le : 127.0.0.1
				<br>Signature serveur
				
			</p>
			
                <?= $_signature  ?>
            
		</section>
	</main>
  
	<!-- <pre>
        <?php
            //print_r($_SERVER)
        ?>
	</pre> -->
	<footer>
		<p>&copy; - MIT - <?= $_copy_right ?></p>
	</footer>
    <?php
         const user_code = [
            "nom"=>"Ledorf",
            "prenom"=>"Rasmus",
            "mail"=>"l.rasmus@php.net"
       ];
       
         print "<ul>\n";

         foreach (user_code as $key => $value) {
             //condition pour afficher le contact dans un lien
             $key!="mail" ? print "<li>".$key." : ".$value."</li>\n" : print '<li>'.$key.' : <a href="mailto:'.$value.'">'.$value.'</a></li>';
             
         }
         print "</ul>\n";
      
    ?>
	
</html>
