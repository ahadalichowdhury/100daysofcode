<?php
    class fruits{
        public $name;//public private protected
        
        function set_Name($name){
            $this->name = $name;
        }
        function get_Name(){
            return $this->name;
        }
    }

    $apple = new fruits();
    $apple->set_Name("apple");
    echo $apple->get_Name();


?>