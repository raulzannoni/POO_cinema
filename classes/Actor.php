<?php

//creation de la class Actor, fils de la classe Personne
class Actor extends Person
    {
        //meme attibrutes de la personne plus les Films et Roles associés
        private Film $_Films;
        private array $_;  
    
        //constructor de la class Director à demander!!!!
         public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
            {
                parent::__construct($nom,  $prenom,  $sexe,  $date_naissance);
                //thinking about
                //$this->_associations = [];
            }

        //function pour ajouter un film à l'objet Director
        public function addAssociations(Association $new_association)
            {
                //thinking about
                //$this->_associations[]= $new_association;
            }

    
     
    }






?>
