<?php
    abstract class Human{
        private $height;
        private $weigth;
        private $age;
        private $gender;
        protected abstract function birthMessage();
        public function birth() {
            $this->birthMessage();
        }
    
        public function getHeight() {
            return $this->height;
        }
    
        public function setHeight($height) {
            $this->height = $height;
        }
    
        public function getWeight() {
            return $this->weight;
        }
    
        public function setWeight($weight) {
            $this->weight = $weight;
        }
    
        public function getAge() {
            return $this->age;
        }
    
        public function setAge($age) {
            $this->age = $age;
        }
        public function getGender() {
            return $this->gender;
        }
    
        public function setGender($gender) {
            $this->gender = $gender;
        }
    }
?>