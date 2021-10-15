<?php
    include_once("./src/head_var.inc.php");
    
?>
<!DOCTYPE html>
<html lang="<?php print $_lang[0];?>">
<head>
	<meta charset="UTF-8">
	<title><?php print title ?></title>
	<link rel="icon" type="image/png" href="https://www.shareicon.net/data/512x512/2016/04/06/482251_php_512x512.png">
	<link rel="stylesheet" href="<?php print $_style; ?>">
</head>
<body>
    <?php
        //var_dump($_ip_address)
    ?>
	<header>
		<h1><?php print title ?> version <?php print $_version_PHP ?></h1>
	</header>
	<main>
		<section>
			<h2>Nous sommes le : <?php print $_date ?></h2>
			<p>
				Votre navigateur est : <?php print $_user_agent; ?><br>
				Votre adress IP est le : <?php print  $_ip_address; ?> 
				<br>Signature serveur :
			</p>
			<?php
                print $_signature_local;
            ?>
		</section>
	</main>
    <?php
        //phpinfo();
    ?>
	<pre>
        <?php
            //print_r($_SERVER); /* cela donne les variables d'environnement */
        ?>

	</pre>
	<?php
		//include_once "./src/test_php.inc.php";
	?>
    <!-- footer -->
    <?php
        require_once "./src/footer.inc.php";
    ?>

</body>
</html>