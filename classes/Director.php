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

        //methode pour ajouter un film à l'objet Director
        
        public function addFilm(Film $new_film)
            {
                //
                $date_film = (int) $new_film->getDateSortie()->format('Y');
                $this->_films[$date_film]= $new_film;

            }
        
        //methode pour trier les films par rapport de la date de sortie (+récent - -récent)
        public function trierFilm(array $films)
        {                
            //function pour ranger deux elements (a et b) en ordre plus petit - plus grand 
            function compare($a, $b)
                {
                    //
                    if($a == $b)
                        {
                            return 0;
                        }
                    //
                    return ($a < $b) ? -1 : 1;
                }
                    
            //trier l'array de film
            uasort ($films, "compare");
            return $films;
        }
        
        
        //methode pour afficher la filmographie de le directeur
        public function getFilmographie()
            {
                //$this->_films = $this->trierFilm($this->_films);

                if($this->getSexe() == 'femme')
                    {
                        $result =   "<br>***************************************************************<br><br>".
                                    $this." est un réalisatrice qui a realisé les films suivantes:<br><br>"; 
                    }
                else
                    {
                        $result =   "<br>***************************************************************<br><br>".
                                    $this." est une réalisateur qui a realisé les films suivantes:<br><br>"; 
                    }        
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