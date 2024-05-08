<?php
    #[\AllowDynamicProperties]
    class User{
        private $name;
        private $last_name;
        private $password;
        private $email;
        private $adress;
        private $phone_number;
        private $birthday;

        public function __construct($name, $last_name, $password, $email, $address, $phone_number, $birthday) {
            $this->name = $name;
            $this->last_name = $last_name;
            $this->password = $password;
            $this->email = $email;
            $this->address = $address;
            $this->phone_number = $phone_number;
            $this->birthday = $birthday;
        }
    
        
        public function getName() {
            return $this->name;
        }
    
        public function getLastName() {
            return $this->last_name;
        }
    
        public function getPassword() {
            return $this->password;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function getAddress() {
            return $this->address;
        }
    
        public function getPhoneNumber() {
            return $this->phone_number;
        }
    
        public function getBirthday() {
            return $this->birthday;
        }
    
        
        public function setName($name) {
            $this->name = $name;
        }
    
        public function setLastName($last_name) {
            $this->last_name = $last_name;
        }
    
        public function setPassword($password) {
            $this->password = $password;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function setAddress($address) {
            $this->address = $address;
        }
    
        public function setPhoneNumber($phone_number) {
            $this->phone_number = $phone_number;
        }
    
        public function setBirthday($birthday) {
            $this->birthday = $birthday;
        }
    }

?>