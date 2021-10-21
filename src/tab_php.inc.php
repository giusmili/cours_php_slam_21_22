<?php
  //fonction d'encodage des caractères
  $url = "https://www.google.com/search?q=html";
  $origin = "j'ai \"sortie\" le <strong>chien</strong> tout à l'heure";
  print urlencode($url);
  $_printout = htmlentities($origin);
  print "<br>".$_printout;
// Your code here!
 $table_lang = ["html", "php", "js"];
 $table_pays = ["fr", "it", "us"];
 $table_global_info =[];
 $table_global_info=array_merge($table_lang,  $table_pays);
 array_push($table_lang, "Python");
 print_r($table_lang);
 print "\n".$table_lang[0];
 print_r($table_global_info);
 
 /*for($i = 0; $i < count($table_global_info); $i++){
     print "\n".($i+1)." : ".$table_global_info[$i];
 }*/
 $i = 0;
  while( $i < count($table_global_info)){
      print "\n".($i+1)." : ".$table_global_info[$i];
      $i++;
      
  }
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
        table [
        []
        ]
    
    */
    $_supertab = [
                1=>array("code"=>"html","statut"=>true),
                2=>array("code"=>"js","statut"=>false),
                3=>array("code"=>"php","statut"=>true)
            ];
   // print_r($_supertab);
   // faire un foreach ici
   foreach($_supertab as $key_1 => $index){ //variable la cle => index
        foreach($index as $key_2 => $value){//index la nouvelle cle nouvelle valeur
            print "\n".$key_2." ".$value."\n";
            //print_r($index);
        }
   }
   $help = count($_supertab);
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
       $key!="mail" ? print "<li>".$key." : ".$value."</li>" : print '<li>'.$key.' : <a href="mailto:'.$value.'">contact</a></li>';
       
   }
   print "</ul>\n";


   
   

?>
