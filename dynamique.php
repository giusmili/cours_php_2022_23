<!--variables-->
<?php
    
    include_once './src/var.inc.php';
    
?>
<!-- header -->
<?php

    include_once './src/header_php.inc.php';

?>
<!-- end header -->
<body>
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<header>
		<h1><?php print $_msg->_presentation." ".main_title." version : ".$_version?></h1>
	</header>
	<main>
        <figure>
            <img src="./asset/a.png" alt="cover php">
            <figcaption>
                <h2>
                    PHP version <?= $_version." ".User::$_nombre ?>
                </h2>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $_date ?></h2>
			<p>
				Votre navigateur est : <?= $_user_agent ?><br>
				Votre adress IP est le : <?= $_addr ?>
				
				
			</p>
            <?= $_signature ?>
			
		</section>
	</main>
    <?php
        require_once './src/footer.inc.php';
    ?>
	<!-- <pre>
        <?php
            //print_r($_SERVER)
        ?>
	</pre> -->
	
    <?php
        //phpInfo();
    ?>
    <script src="./js/app.js"></script>
	
</html>
