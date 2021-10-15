<?php
    /* set title for web page */
    const title = "PHP started";
    $_lang = ["fr","gb","it"];
    $_style = "./css/style.css";
    $_version_PHP = phpversion();
    $_date = date('d-m-Y : H : i : s');
    $_user_agent = $_SERVER['HTTP_USER_AGENT'];
    $_signature_local = $_SERVER['SERVER_SIGNATURE'];
    $_ip_address = $_SERVER['REMOTE_ADDR'];
    $_copyright = date('Y');
   //print gettype($_version_PHP);
   
?>