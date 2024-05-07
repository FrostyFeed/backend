<?php
    include "human.php";
    class Student extends Human{
        private $university;
        private $course;
        protected function birthMessage() {
            echo "У Студента народилась дитина<br>";
        }
        public function getUniversity() {
            return $this->university;
        }

        public function setUniversity($university) {
            $this->university = $university;
        }

        public function getCourse() {
            return $this->course;
        }

        public function setCourse($course) {
            $this->course = $course;
        }

        public function promoteToNextCourse() {
            $this->course++;
        }
        public function cleanRoom() {
            echo "Студент прибирає кімнату<br>";
        }
    
        public function cleanKitchen() {
            echo "Студент прибирає кухню<br>";
        }
    }
    $student = new Student();
    $student->setHeight(170);
    $student->setWeight(60);
    $student->setAge(20);
    $student->setUniversity("Random");
    $student->setCourse(2);
    $student->birth();
    $student->cleanRoom(); 
    $student->cleanKitchen(); 
    echo "Height: " . $student->getHeight() . " cm<br>";
    echo "Weight: " . $student->getWeight() . " kg<br>";
    echo "Age: " . $student->getAge() . " years<br>";
    echo "University: " . $student->getUniversity() . "<br>";
    echo "Course: " . $student->getCourse() . "<br>";
?>