<?php 
    //variable scope / lingkup variabel
    //variable local untuk file ini
    $x = 10;
    echo $x;

    //gunakan keyword global untuk menjadikan suatu variable bersifat global
    //function bersifat isolatif dimana variablenya tidak harus berada pada lingkup function-nya
    function tampilx() {
        global $x;
        echo $x;
    }

    tampilx();

    var_dump($_SERVER);
    
?>