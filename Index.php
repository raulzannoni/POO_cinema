<h1>POO_Cinema</h1>

<h3>****************************</h3>

<?php

//methode pour intégrer toutes les class crées
spl_autoload_register(function ($class_name) 
    {
        include 'classes/' . $class_name . '.php';
    });

    $SF = new FilmType("SF");
    $Drama = new FilmType("Dramatique");
    $Aventure = new FilmType("Aventure");


    
    $RidleyScott = new Director("Scott", "Ridley", "homme", "30-11-1937");
    $StevenSpielberg = new Director("Spielberg", "Lucas", "homme", "18-12-1946");
    $RobertZemeckis = new Director("Zemeckis", "Robert", "homme", "14-05-1951");


    $Alien = new Film("Alien", "01-01-1979", 117, $RidleyScott, $SF);
    $Blade_Runner = new Film("Blade Runner", "01-01-1982", 111, $RidleyScott, $SF);
    $Gladiator = new Film("Gladiator", "01-01-2000", 155, $RidleyScott, $Drama);
    $Indiana_Jones = new Film("Indiana Jones - Les Aventuriers de l'arche perdue", "01-01-1981", 115, $StevenSpielberg, $Aventure);
    $Soldat_Ryan = new Film("Il faut sauver le soldat Ryan", "01-01-1998", 163, $StevenSpielberg, $Drama);
    $Minority_Report = new Film("Minority Report", "01-01-2002", 145, $StevenSpielberg, $SF);
    $Retour_Futur = new Film("Retour vers le futur", "01-01-1985", 116, $RobertZemeckis, $SF);
    $Forrest_Gump = new Film("Forrest Gump", "01-01-1994", 142, $RobertZemeckis, $Drama);
    $Cast_Away = new Film("Seul au monde", "01-01-2000", 143, $RobertZemeckis, $Drama);







    $RidleyScott->getFilmographie();
    $StevenSpielberg->getFilmographie();
    $RobertZemeckis->getFilmographie();



    $SF->getFilms(); 
    $Drama->getFilms(); 

?>
