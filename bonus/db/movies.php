<?php

include __DIR__ . "/../movie.php";

$movies = [
    $movie1 = new Movie("Ritorno al futuro", "Back to the future", "USA", 1985, "English", "Robert Zemeckis"),
    $movie2 = new Movie("Il padrino", "The godfather", "USA", 1972, "English", "Francis Ford Coppola"),
    $movie3 = new Movie("Rambo", "First blood", "USA", 1982, "English", "Ted Kotcheff"),
    $movie4 = new Movie("Akira", "アキラ", "Japan", 1988, "Japanese", "Katsuhiro Ōtomo"),
    $movie5 = new Movie("Iron Man", "Iron Man", "USA", 2008, "English", "Jon Favreau"),
];

?>