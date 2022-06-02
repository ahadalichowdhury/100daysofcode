<?php
    //inheritance
    class fruits {
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "the fruit name is {$this->name} and color is {$this->color}";


        }
    }
    class Strawberry extends fruits{
        public function message(){
            echo "am i a fruit or a berry?";
        }
    }
    $strawberry = new Strawberry
?>