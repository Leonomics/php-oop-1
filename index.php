<?php
    class Movie {
        public $title;
        public $originalTitle;
        public $country;
        public $year;
        public $originalLanguage;
        public $director;

        function __construct($_title, $_originalTitle, $_country, $_year, $_originalLanguage, $_director)
        {
            $this -> title = $_title;
            $this -> originalTitle = $_originalTitle;
            $this -> country = $_country;
            $this -> setYear($_year);
            $this -> originalLanguage = $_originalLanguage;
            $this -> director = $_director;
        }


        public function setYear($_year){
            if(is_int($_year)){
                $this -> year = $_year;
            }else{

            }
        }

    };

    $movie1 = new Movie("Ritorno al futuro", "Back to the future", "USA", 1985, "English", "Robert Zemeckis");
    $movie2 = new Movie("Il padrino", "The godfather", "USA", 1972, "English", "Francis Ford Coppola");

    var_dump($movie1);
    var_dump($movie2);
?>