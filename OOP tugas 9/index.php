<?php 
    require_once('animal.php');
    require_once('animal2.php');



    $sheep = new Animal("shaun");

    echo "Nama Hewan : ".$sheep->name."<br>"; // "shaun"
    echo "kakinya ada : ".$sheep->legs."<br>"; // 4
    echo "berdarah : ".$sheep->cold_blooded."<br>"."<br>"; // "no"

    $sungokong = new Ape("kera sakti");
    echo "Nama Hewan : ".$sungokong->name."<br>"; 
    echo "kakinya ada : ".$sungokong->legs."<br>";
    echo "berdarah : ".$sungokong->cold_blooded."<br>"; 
    echo "Bersuara : ".$sungokong->yell()."<br>"."<br>"; // "Auooo"

    $kodok = new Frog("buduk");
    echo "Nama Hewan : ".$kodok->name."<br>"; 
    echo "kakinya ada : ".$kodok->legs."<br>"; 
    echo "berdarah : ".$kodok->cold_blooded."<br>";
    echo "Bergerak : ".$kodok->jump()."<br>" ; // "hop hop"
?>