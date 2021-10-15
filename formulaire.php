<?php
    const title="Formulaire d'inscription";
    $lang = ["fr","gb"];
    $_copy = date("d-m-Y : H - i");
?>

<!DOCTYPE html>
<html lang="<?php print $lang[0]; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print title ?></title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1><?php print title ?></h1>
    </header>
    <main>
        <?php
            include_once "./src/form.inc.php";
            
            
        ?>
        <pre>
            <?php
            //print $_SERVER['PHP_SELF'];
               // print_r($_SERVER);
            ?>
        </pre>
   
    </main>
    <footer>
        <?php
            print "&copy; - Under - ".$_copy." c'est l'heures";
        ?>
    </footer>
 
</body>
</html>