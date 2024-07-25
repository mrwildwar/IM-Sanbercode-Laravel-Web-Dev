<?php
    require_once('animal.php');

    class Frog extends Animal{
        public function __construct($nama){
            $this->name=$nama;
            }
        public function jump(){
            return "hop-hop";

        }
    }

    class Ape extends Animal{
        public $legs=2;
        public function __construct($nama){
            $this->name=$nama;
            }
        public function yell(){
            return "auooo";

        }
    }
?>