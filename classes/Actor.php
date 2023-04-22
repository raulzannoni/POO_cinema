<?php

//creation de la class Actor, fils de la classe Personne
class Actor extends Person
    {
        //meme attibrutes de la personne plus les Films et Roles associés
        private Film $_Films;
        private array $_associations;  
    
        //constructor de la class Director à demander!!!!
         public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
            {
                parent::__construct($nom,  $prenom,  $sexe,  $date_naissance);
                $this->_associations = [];
            }

        //methode pour ajouter une association (FILM - ACTOR - ROLE) dans l'objet Acteur
        public function addAssociation(Association $new_association)
            {
                //vérifier que l'actor correspond à l’association spécifique de ce acteur
                if($new_association->getActor() == $this)
                {
                    $this->_associations[] = $new_association;
                }
                
            }

    
     
    }






?>
