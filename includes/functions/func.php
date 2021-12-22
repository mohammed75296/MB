<?php
    function gettitel(){

        global $pagtiltel;

        if(isset($pagtiltel)){

            echo $pagtiltel;

        }else {

            echo "Defult";
        }



    }
?>