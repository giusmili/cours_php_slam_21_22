# &#128526; Cours PHP

## introduction :
Le langage PHP fut créé en 1994 par Rasmus Lerdorf pour son site web. C’était à l’origine une bibliothèque logicielle en C dont il se servait pour conserver une trace des visiteurs qui venaient consulter son CV. Au fur et à mesure qu’il ajoutait de nouvelles fonctionnalités, Rasmus a transformé la bibliothèque en une implémentation capable de communiquer avec des bases de données et de créer des applications dynamiques et simples pour le Web. Rasmus décida alors en 1995 de publier son code, pour que tout le monde puisse l’utiliser et en profiter. PHP s’appelait alors PHP/FI (pour Personal Home Page Tools/Form Interpreter). En 1997, deux étudiants, Andi Gutmans et Zeev Suraski, redéveloppèrent le cœur de PHP/FI. Ce travail aboutit un an plus tard à la version 3 de PHP, devenu alors PHP: Hypertext Preprocessor. Peu de temps après, Andi Gutmans et Zeev Suraski commencèrent la réécriture du moteur interne de PHP. Ce fut ce nouveau moteur, appelé Zend Engine — le mot Zend est la contraction de Zeev et Andi — qui servit de base à la version 4 de PHP

## Syntaxe et variables d'environnement
```php
    <?php
	print "Votre Navigateur est : ".$_SERVER['HTTP_USER_AGENT'];
	print "Votre Adresse Serveur est :".$_SERVER['REMOTE_ADDR'];
	print "Nous le : ".date("d/m/Y")." Il est : ".date("H:i:s")." Sec";
    
	foreach (user_code as $key => $value) {
       //condition pour afficher le contact dans un lien
       $key!="mail" ? print "<li>".$key." : ".$value."</li>" : print '<li>'.$key.' : <a href="mailto:'.$value.'">contact</a></li>';
       
   }
   ?>
```