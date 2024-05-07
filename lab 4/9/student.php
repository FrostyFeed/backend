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
    }
    $student = new Student();
    $student->setHeight(170);
    $student->setWeight(60);
    $student->setAge(20);
    $student->setUniversity("Random");
    $student->setCourse(2);
    $student->birth();
    echo "Height: " . $student->getHeight() . " cm<br>";
    echo "Weight: " . $student->getWeight() . " kg<br>";
    echo "Age: " . $student->getAge() . " years<br>";
    echo "University: " . $student->getUniversity() . "<br>";
    echo "Course: " . $student->getCourse() . "<br>";
?>