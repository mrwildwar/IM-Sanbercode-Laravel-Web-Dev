<?php 
    require_once('animal.php');
    require_once('animal2.php');



    $sheep = new Animal("shaun");

    echo $sheep->name."<br>"; // "shaun"
    echo $sheep->legs."<br>"; // 4
    echo $sheep->cold_blooded."<br>"; // "no"

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"
?>