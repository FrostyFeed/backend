<?php
    class Circle {
        private $x;
        private $y;
        private $radius;
    
        public function __construct($x, $y, $radius) {
            $this->x = $x;
            $this->y = $y;
            $this->radius = $radius;
        }
    
        public function getX() {
            return $this->x;
        }
    
        public function setX($x) {
            $this->x = $x;
        }
    
        public function getY() {
            return $this->y;
        }
    
        public function setY($y) {
            $this->y = $y;
        }
    
        public function getRadius() {
            return $this->radius;
        }
    
        public function setRadius($radius) {
            $this->radius = $radius;
        }
    
        public function __toString() {
            return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
        }
        public function intersects(Circle $otherCircle) {
            // Відстань між центрами кол
            $distance = sqrt(($this->x - $otherCircle->getX()) ** 2 + ($this->y - $otherCircle->getY()) ** 2);
            
            // Сума радіусів двох кол
            $sumOfRadii = $this->radius + $otherCircle->getRadius();
            
            // Якщо відстань між центрами менша або дорівнює сумі радіусів, то кола перетинаються
            if ($distance <= $sumOfRadii) {
                return true;
            } else {
                return false;
            }
        }
    }
    $circle = new Circle(3, 4, 5);
    echo $circle->getX(); 
    echo "<br>";
    echo $circle->getY(); 
    echo "<br>";
    echo $circle->getRadius();
    echo "<br>";
    echo $circle; 
    $circle1 = new Circle(0, 0, 5);
    $circle2 = new Circle(10, 0, 5);
    if ($circle1->intersects($circle2)) {
        echo "<br>Кола перетинаються";
    } else {
        echo "<br>Кола не перетинаються";
    }
?>