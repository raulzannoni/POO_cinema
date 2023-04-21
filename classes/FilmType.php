<?php

//creation de la class FilmType relié à chaque film
class FilmType  
    {
        // attributes privées pour la class FilmType
        private array $_films;
   
        private string $_genre;

        //creation de le constructor pour la class FilmType
        public function __construct(string $genre)
            {
                $this->_genre = $genre;
                $this->_films = [];
            }
        
        //setter pour chaque attribute
        public function setGenre($genre)
            {
                $this->_genre = $genre;
            }

        //getter pour chaque attribute
        public function getGenre()
            {
                return $this->_genre;
            }

        //methode pour afficher le genre du film directement
        public function __toString()
            {
                return $this->_genre;
            }

        //methode pour ajouter un film à le genre
        public function addFilm(Film $new_film)
            {
                $this->_films[]= $new_film;
            }
        
        //methode pour afficher le film de le genre relatifs
        public function getFilms()
            {
                $result =   "<br>******************<br><br>
                            Le film de genre ".$this." sont les suivantes:<br><br>"; 
                            foreach($this->_films as $key => $film)
                                {
                                    $result .=  strval($key + 1).") ".$film." <br>";
                                }
                $result .=  "<br>******************<br><br>";
                
                echo $result;
            }


        
    }


?>