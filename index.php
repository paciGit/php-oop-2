<?php
    class Square {
        private $lato;
        public function __construct($lato) {
            $this -> setLato($lato);
        }

        public function getLato() {
            return $this -> lato;
        }

        public function setLato($lato) {
            $this -> lato = $lato;
        }

        public function getArea() {
            return $this -> lato * $this -> lato;
        }

        public function getPer() {
            return 4 * $this -> lato;
        }

        private function getStrOutput() {
            return "Lato: " . $this -> getLato() . "<br>"
                 . "Area: " . $this -> getArea() . "<br>"
                 . "Perimetro : " . $this -> getPer() . "<br>";
        }

        public function __toString() {
            return "<i>Square</i>:<br>" . $this -> getStrOutput() . "<br>";
        }
    }

    class Cube extends Square {
        public function getVolume() {
            return $this -> getArea() * $this -> getLato();
        }

        public function getSup() {
            return 6 * $this -> getArea();
        }

        private function getStrOutput() {

            return "Lato:" . $this -> getLato() . "<br>"
                 . "Volume: " . $this -> getVolume() . "<br>"
                 . "Superficie: " . $this -> getSup() . "<br>";

        }

        public function __toString() {

            return "<i>Cube</i>:<br>" . $this -> getStrOutput() . "<br>";

        }
    }



    $square1 = new Square(2);
    $square2 = new Square(4);

    $cube1 = new Cube(10);
    $cube2 = new Cube(15);

    echo
          $square1 . "<br>"
        . $square2 . "<br>"
        . $cube1 . "<br>"
        . $cube2 . "<br>"
?>
<?php
    class Square {
        private $lato;
        public function __construct($lato) {
            $this -> setLato($lato);
        }

        public function getLato() {
            return $this -> lato;
        }

        public function setLato($lato) {
            $this -> lato = $lato;
        }

        public function getArea() {
            return $this -> lato * $this -> lato;
        }

        public function getPer() {
            return 4 * $this -> lato;
        }

        private function getStrOutput() {
            return "Lato: " . $this -> getLato() . "<br>"
                 . "Area: " . $this -> getArea() . "<br>"
                 . "Perimetro : " . $this -> getPer() . "<br>";
        }

        public function __toString() {
            return "<i>Square</i>:<br>" . $this -> getStrOutput() . "<br>";
        }
    }

    class Cube extends Square {
        public function getVolume() {
            return $this -> getArea() * $this -> getLato();
        }

        public function getSup() {
            return 6 * $this -> getArea();
        }

        private function getStrOutput() {

            return "Lato:" . $this -> getLato() . "<br>"
                 . "Volume: " . $this -> getVolume() . "<br>"
                 . "Superficie: " . $this -> getSup() . "<br>";

        }

        public function __toString() {

            return "<i>Cube</i>:<br>" . $this -> getStrOutput() . "<br>";

        }
    }



    $square1 = new Square(2);
    $square2 = new Square(4);

    $cube1 = new Cube(10);
    $cube2 = new Cube(15);

    echo
          $square1 . "<br>"
        . $square2 . "<br>"
        . $cube1 . "<br>"
        . $cube2 . "<br>"
?>
