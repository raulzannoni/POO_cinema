<?php

//creation de la classe Role, interpreté par un acteur dans un film
class Role
    {   
        //attributes privées de la class Role
        private string $_role;
        private array $_associations;

        //definition de le costructor de la class Role
        public function __construct(string $role)
            {
                $this->_role = $role;
                $this->_associations = [];

            }

        //setter pour l'attribute role
        public function setRole($role)
            {
                $this->_role = $role;
            }
        //getter pour l'attribute role
        public function getRole()
            {
                return $this->_role;
            }

        //function pour ajouter une association à l'objet Role
        public function addAssociation(Association $new_association)
            {
                //vérifier que le role correspond à l’association spécifique de ce role
                if($new_association->getRole() == $this)
                    {
                        $this->_associations[]= $new_association;
                    }
            }
    }



?>