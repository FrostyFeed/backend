<?php
    include "human.php";
    class Programmer extends Human{
        private $languages = [];
        private $experience;

        public function getLanguages() {
            return $this->languages;
        }

        public function addLanguage($language) {
            $this->languages[] = $language;
        }

        public function getExperience() {
            return $this->experience;
        }

        public function setExperience($experience) {
            $this->experience = $experience;
        }
    }
    $programmer = new Programmer();
    $programmer->setHeight(175);
    $programmer->setWeight(70);
    $programmer->setAge(25);
    $programmer->addLanguage("PHP");
    $programmer->addLanguage("JavaScript");
    $programmer->setExperience("5 years");
    echo "Height: " . $programmer->getHeight() . " cm<br>";
    echo "Weight: " . $programmer->getWeight() . " kg<br>";
    echo "Age: " . $programmer->getAge() . " years<br>";
    echo "Languages: " . implode(", ", $programmer->getLanguages()) . "<br>";
    echo "Experience: " . $programmer->getExperience() . "<br>";
?>