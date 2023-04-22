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
    $Action = new FilmType("Action");


    //creation de les realisateurs
    $Ridley_Scott = new Director("Scott", "Ridley", "homme", "30-11-1937");
    $Steven_Spielberg = new Director("Spielberg", "Steven", "homme", "18-12-1946");
    $Robert_Zemeckis = new Director("Zemeckis", "Robert", "homme", "14-05-1951");
    $Ron_Howard = new Director("Howard", "Ron", "homme","01-03-1954");
    $Sam_Raimi = new Director("Raimi", "Sam", "homme", "23-10-1959");
    $Marc_Webb = new Director("Webb", "Marc", "homme", "31-08-1974");
    $John_Watts = new Director("Watts", "John", "homme", "28-06-1981");

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
    $Film_Spiderman = new Film("Spider-Man", "01-01-2000", 121, $Sam_Raimi, $Action);
    $Film_Amazing_Spiderman = new Film("The Amazing Spider-Man", "01-01-2012", 136, $Marc_Webb, $Action);
    //$Film_Spiderman_Far_from_home = new Film("Spider-Man: Far from Home", "01,01-2017", 133, $John_Watts, $Action);


    //creation de les acteurs
    $Tom_Hanks = new Actor("Hanks", "Tom", "homme", "09-07-1956");
    $Russel_Crowe = new Actor("Crowe", "Russel", "homme", "07-04-1964");
    $Harrison_Ford = new Actor("Ford", "Harrison", "homme", "13-07-1942");
    $Sean_Young = new Actor("Young", "Sean", "femme", "20-11-1959");
    $Tobey_Maguire = new Actor("Maguire", "Tobey", "homme", "27-06-1975");
    $Andrew_Garfield = new Actor("Garfield", "Andrew", "homme", "20-08-1983");
    $Tom_Holland= new Actor("Holland", "Tom", "homme", "01-06-1996");


    //creation de les roles
    $John_Miller = new Role("capitaine John H. Miller");
    $Forrest_Gump = new Role ("Forrest Gump");
    $Chuck_Noland = new Role("Chuck Role");
    $Maximus = new Role("Maximus Decimus Meridius");
    $John_Nash = new Role("John Nash");
    $Rick_Deckard = new Role("Rick Deckard");
    $Indiana_Jones = new Role("Indiana Jones");
    $Rachel = new Role("Rachel");
    $Spiderman = new Role ("SpiderMan");

    //creation de les associations FILM, ACTEUR, ROLE
    $association_Blade_Runner_1 = new Association($Film_Blade_Runner, $Harrison_Ford, $Rick_Deckard);
    $association_Blade_Runner_2 = new Association($Film_Blade_Runner, $Sean_Young, $Rachel);

    $association_Gladiator_1 = new Association($Film_Gladiator, $Russel_Crowe, $Maximus);

    $association_Indiana_Jones_1 = new Association($Film_Indiana_Jones, $Harrison_Ford, $Indiana_Jones);

    $association_Soldat_Ryan_1 = new Association($Film_Soldat_Ryan, $Tom_Hanks, $John_Miller);

    $association_Forrest_Gump_1 = new Association($Film_Forrest_Gump, $Tom_Hanks, $Forrest_Gump);

    $association_Cast_Away_1 = new Association($Film_Cast_Away, $Tom_Hanks, $Chuck_Noland);

    $association_Beatiful_Mind_1 = new Association($Film_Beatiful_Mind, $Russel_Crowe, $John_Nash);

    $association_Spiderman_1 = new Association($Film_Spiderman, $Tobey_Maguire, $Spiderman);

    $association_Amazing_Spiderman_1 = new Association($Film_Amazing_Spiderman, $Andrew_Garfield, $Spiderman);

    //$association_Spiderman_Far_from_home_1 = new Association($Film_Spiderman_Far_from_home, $Tom_Holland, $Spiderman);

    //info de chaque acteurs
    $Tom_Hanks->getFilmographie();
    $Russel_Crowe->getFilmographie();
    $Harrison_Ford->getFilmographie();

    //echo count($Film_Blade_Runner->getAssociations());

    //info de chaque film
    $Film_Blade_Runner->getInfo();
    $Film_Forrest_Gump->getInfo();
    $Film_Gladiator->getInfo();


    //info de les filmographies de chaque realisateur
    $Ridley_Scott->getFilmographie();
    $Steven_Spielberg->getFilmographie();
    $Robert_Zemeckis->getFilmographie();


    //info de les films appartenant à chaque genre de film
    $SF->getFilms(); 
    $Drama->getFilms(); 

    //info sur les actuers qui ont joué les roles suivantes:
    $Indiana_Jones->getActors();
    $John_Miller->getActors();
    $Spiderman->getActors();


?>
