<h1>POO_Cinema</h1>

<h3>****************************</h3>

<?php

//methode pour intégrer toutes les class crées
spl_autoload_register(function ($class_name) 
    {
        include 'classes/' . $class_name . '.php';
    });

    //creaton de le genre de film possible
    $SF = new FilmType("SF");
    $Drama = new FilmType("Dramatique");
    $Aventure = new FilmType("Aventure");


    //creation de les realisateurs
    $Ridley_Scott = new Director("Scott", "Ridley", "homme", "30-11-1937");
    $Steven_Spielberg = new Director("Spielberg", "Steven", "homme", "18-12-1946");
    $Robert_Zemeckis = new Director("Zemeckis", "Robert", "homme", "14-05-1951");
    $Ron_Howard = new Director("Howard", "Ron", "homme","01-03-1954");

    //creation de les films 
    $Film_Alien = new Film("Alien", "01-01-1979", 117, $Ridley_Scott, $SF);
    $Film_Blade_Runner = new Film("Blade Runner", "01-01-1982", 111, $Ridley_Scott, $SF);
    $Film_Gladiator = new Film("Gladiator", "01-01-2000", 155, $Ridley_Scott, $Drama);
    $Film_Indiana_Jones = new Film("Indiana Jones - Les Aventuriers de l'arche perdue", "01-01-1981", 115, $Steven_Spielberg, $Aventure);
    $Film_Soldat_Ryan = new Film("Il faut sauver le soldat Ryan", "01-01-1998", 163, $Steven_Spielberg, $Drama);
    $Film_Minority_Report = new Film("Minority Report", "01-01-2002", 145, $Steven_Spielberg, $SF);
    $Film_Retour_Futur = new Film("Retour vers le futur", "01-01-1985", 116, $Robert_Zemeckis, $SF);
    $Film_Forrest_Gump = new Film("Forrest Gump", "01-01-1994", 142, $Robert_Zemeckis, $Drama);
    $Film_Cast_Away = new Film("Seul au monde", "01-01-2000", 143, $Robert_Zemeckis, $Drama);
    $Film_Beatiful_Mind = new Film("Un homme d'exception", "01-01-2001", 135, $Ron_Howard, $Drama);

    //creation de les acteurs
    $Tom_Hanks = new Actor("Hanks", "Tom", "homme", "09-07-1956");
    $Russel_Crowe = new Actor("Crowe", "Russel", "homme", "07-04-1964");
    $Harrison_Ford = new Actor("Ford", "Harrison", "homme", "13-07-1942");


    //creation de les roles
    $John_Miller = new Role("capitaine John H. Miller");
    $Forrest_Gump = new Role ("Forrest Gump");
    $Chuck_Noland = new Role("Chuck Role");
    $Maximus = new Role("Maximus Decimus Meridius");
    $John_Nash = new Role("John Nash");
    $Rick_Deckard = new Role("Rick Deckard");
    $Indiana_Jones = new Role("Indiana Jones");

    //creation de les associations FILM, ACTEUR, ROLE
    $association_Balde_Runner_1 = new Association($Film_Blade_Runner, $Harrison_Ford, $Rick_Deckard);

    $association_Gladiator_1 = new Association($Film_Gladiator, $Russel_Crowe, $Maximus);

    $association_Indiana_Jones_1 = new Association($Film_Indiana_Jones, $Harrison_Ford, $Indiana_Jones);

    $association_Soldat_Ryan_1 = new Association($Film_Soldat_Ryan, $Tom_Hanks, $John_Miller);

    $association_Forrest_Gump_1 = new Association($Film_Forrest_Gump, $Tom_Hanks, $Forrest_Gump);

    $association_Cast_Away_1 = new Association($Film_Cast_Away, $Tom_Hanks, $Chuck_Noland);

    $association_Beatiful_Mind_1 = new Association($Film_Beatiful_Mind, $Russel_Crowe, $John_Nash);




    //info de les filmographies de chque realisateur
    $RidleyScott->getFilmographie();
    $StevenSpielberg->getFilmographie();
    $RobertZemeckis->getFilmographie();


    //info de les films appartenant à chaque genre de film
    $SF->getFilms(); 
    $Drama->getFilms(); 

?>
