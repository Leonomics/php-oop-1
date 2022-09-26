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
?>