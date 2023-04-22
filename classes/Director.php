<?php

class Director extends Person
    {
        //meme attibrutes de la personne plus le array des films associés
        private array $_films;  
    
        //constructor de la class Director à demander!!!!
         public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
            {
                parent::__construct($nom,  $prenom,  $sexe,  $date_naissance);
                $this->_films = [];
            }

        //function pour ajouter un film à l'objet Director
        public function addFilm(Film $new_film)
            {
                $this->_films[]= $new_film;
            }
        
        //methode pour afficher la filmographie de le directeur
        public function getFilmographie()
            {
                $result =   "<br>***************************************************************<br><br>".
                            $this." est un réalisateur qui a realisé les films suivantes:<br><br>"; 
                            foreach($this->_films as $key => $film)
                                {
                                    $result .=  strval($key + 1).") ".$film.
                                                ", sortie en ".$film->getDateSortie()->format('Y').
                                                ", genre ".$film->getFilmType()."<br>";
                                }
                $result .=  "<br>***************************************************************<br><br>";
            
                echo $result;
            }

    }


?>