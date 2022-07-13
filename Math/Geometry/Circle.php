<?php

    namespace Math\Geometry;

    class Circle{
        public $radius;

        function __construct($radius){
            $this->radius = $radius;
        }

        public function getDiameter(){
            return $this->radius*2;
        }

        //povrsina P=r2PI
        public function getArea(){
            return \Math\Constants::PI * $this->radius ** 2;
        }

        //opseg O=2rPI
        public function getCircumference(){
            return 2 * $this->radius * \Math\Constants::PI;
        }
    }

?>