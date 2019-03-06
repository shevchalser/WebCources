<?php 
    class SomeClass
    {
        public function HellWorld(){
            echo ("Hello world!");
        }
        public $hw = "Hello World!";

        public  $count = 3;


        public function RecHW($hw,$count)
        {
            $count--;
            echo($hw);
            if ($count<0)
                {return;}
            else
                {$this->RecHW($hw,$count);}
        }

    }
?>
  
