<?php

//creation de la class Film
class Film
    {  
        //attributes privées de la class film
        private string $_titre;
        private DateTime $_date_sortie;  
        private int $_durée;
        private Director $_director;

        private array $_associations;

        private FilmType $_filmType;

        //creation de le constructor de Film
        public function __construct(string $titre, string $date_sortie, int $durée, Director $director, FilmType $filmType)
            {
                $this->_titre = $titre;
                $this->_date_sortie = new DateTime($date_sortie);
                $this->_durée = $durée;
                $this->_director = $director;
                $this->_associations = [];
                $this->_filmType = $filmType;
                //chaque fois un film est instancié, il sera ajouté à le directeur et à le type de film
                $this->_filmType->addFilm($this);
                $this->_director->addFilm($this);
            }

        //setter pour chaque attribute
        public function setTitre($titre)
            {
                $this->_titre = $titre;
            }
        public function setDateSortie($date_sortie)
            {
                $this->_date_sortie = $date_sortie;
            }
        public function setDirector($director)
            {
                $this->_director = $director;
            }
    
        public function setFilmType($filmType)
            {
                $this->_filmType = $filmType;
            }

        //getter pour chaque attribute
        public function getTitre()
            {
                return $this->_titre;
            }
        public function getDateSortie()
            {
                return $this->_date_sortie;
            }
        public function getDirector()
            {
                return $this->_director;
            }

        public function getFilmType()
            {
                return $this->_filmType;
            }
        
        //methode pour imprimer l'objet
        public function __toString()
            {
                return $this->_titre;
            }

        
    }




?>