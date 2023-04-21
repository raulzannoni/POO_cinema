<h1>POO_Cinema</h1>

<h3>****************************</h3>

<?php

//methode pour intégrer toutes les class crées
spl_autoload_register(function ($class_name) 
    {
        include 'classes/' . $class_name . '.php';
    });

    $SF = new FilmType("SF");
    $Drama = new FilmType("Drama");
    
    $RidleyScott = new Director("Scott", "Ridley", "masculin", "30-11-1937");



    $Alien = new Film("Alien", "01-01-1979", 117, $RidleyScott, $SF);
    $Blade_Runner = new Film("Blade Runner", "01-01-1982", 111, $RidleyScott, $SF);
    $Gladiator = new Film("Gladiator", "01-01-2000", 155, $RidleyScott, $Drama);

    $RidleyScott->getFilmographie();

    $SF->getFilms();  

?>
