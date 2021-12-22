<?php
    $tpl = '../includes/templets/'; //Templet directory
    $css = '../css/';  //css directory
    $js  =  '../js/'; //js directory
    $lang = '../includes/lang/';
    $fanc = '../includes/functions/';
   
    include $fanc.'func.php';
    include $lang.'english.php';
    include $tpl.'heder.php';

    

    if(isset($navbar)){
        include $tpl.'navbar.php';
        include $tpl.'caruosel.php';

    }elseif(!isset($navbar)){
        include $tpl.'navbar.php';

    }

?>