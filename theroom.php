<?php
    class theroom{
        private $name;
        private $price;

        public function __construct($name,$price){
            $this->name = $name;
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        public function __toString()
        {
            return $this->getName()."
".$this->getPrice();
        }
        public function toHTML(){
            $name = $this->getName();
            $price = $this->getPrice();
            return <<<ENDE
                     <div class="product">
                        <h1>
                            $name;
                        </h1>
                        <p>
                            $price
                        </p>
                     </div>
ENDE;
        }
    }
    $testroom = new theroom("The room", "EUR 149,-");

    echo $testroom;

