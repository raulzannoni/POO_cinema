<?php

//creation de la class Film initial
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
        
        public function getAssociations()
            {
                return $this->_associations;
            }

        //methode pour ajouter une association (FILM - ACTOR - ROLE) dans l'objet film
        public function addAssociation(Association $new_association)
            {
                //vérifier que le film correspond à l’association spécifique de ce film
                if($new_association->getFilm() == $this)
                    {
                        $this->_associations[] = $new_association;
                    }
            }
        
        //methode pour imprimer l'objet
        public function __toString()
            {
                return $this->_titre;
            }

        //methode pour afficher les infos de le film
        public function getInfo()
            {
                if($this->_director->getSexe() == 'femme')
                    {
                        $result =   "<br>***************************************************************<br><br>".
                                    $this." est un film ".$this->_filmType->getGenre()." réalisé par la réalisatrice "
                                    .$this->_director->__toString().", sorti dans l'année ".$this->getDateSortie()->format('Y').".<br><br>
                                    Le casting de ".$this." est le suivante:<br><br>";
                    }
                else
                    {
                        $result =   "<br>***************************************************************<br><br>".
                                    $this." est un film ".$this->_filmType->getGenre()." réalisé par le réalisateur "
                                    .$this->_director->__toString().", sorti dans l'année ".$this->getDateSortie()->format('Y').".<br><br>
                                    Le casting de ".$this." est le suivante:<br><br>";
                    }               
                            foreach($this->_associations as $key => $association)
                                {
                                    $result .=  strval($key + 1).") ".$association->getActor().
                                                ", dans le role de ".$association->getRole()."; <br>";
                                }
                $result .=  "<br>***************************************************************<br><br>";
            
                echo $result;
            }
        
        //methode pour afficher la synopsis de le film par wikipedia
        public function getSynopsis()
            {
                //chaine de debut pour commencer à récupérer le texte demandé
                $synopsis_string_start = 'Synopsis">modifier le code</a><span class="mw-editsection-bracket">]</span></span></h2>';

                //chaine de fiin pour terminer à récupérer le texte demandé
                $synopsis_string_end = '<span class="mw-headline" id="Fiche_technique">Fiche technique</span>';

                //chaine adapté à le format wiki à rechercher
                $film_wiki = str_replace(" ", "_", $this);

                //méthode pour prendre tout le contenu de la page Web inséré comme URL dans l'argument
                $home_wiki_film =file_get_contents('https://fr.wikipedia.org/wiki/'.$film_wiki);

                //position numérique d’où part le synopsis de la page choisie
                $start = stripos($home_wiki_film, $synopsis_string_start)+strlen($synopsis_string_start);

                //position numérique d’où se termine le synopsis de la page choisie
                $end = stripos($home_wiki_film, $synopsis_string_end, $start);

                //longueur numérique du synopsis de la page choisie
                $length = $end - $start;

                //titre de le synopsis
                $synopsis_title =   "<h4>Synopsis de le film: ".$this." </h4>";

                //controle sur la page
                if($length>0)
                    {
                        //text synopsis
                        $synopsis =         "<small>".substr($home_wiki_film, $start, $length)."</small>";
                    }
                else
                    {
                        //méthode pour prendre tout le contenu de la page Web inséré comme URL dans l'argument
                        $home_wiki_film =file_get_contents('https://fr.wikipedia.org/wiki/'.$film_wiki.'_(film)');

                        //position numérique d’où part le synopsis de la page choisie
                        $start = stripos($home_wiki_film, $synopsis_string_start)+strlen($synopsis_string_start);

                        //position numérique d’où se termine le synopsis de la page choisie
                        $end = stripos($home_wiki_film, $synopsis_string_end, $start);

                        //longueur numérique du synopsis de la page choisie
                        $length = $end - $start;
                        
                        //titre à  afficher + text synopsis
                        $synopsis = "<small>".substr($home_wiki_film, $start, $length)."</small>";

                    }

                //imprime de la synopsis
                echo $synopsis_title;    
                echo strip_tags($synopsis, '<p>');
            }
    }




?>