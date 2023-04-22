<?php

//creation de la classe Role, interpreté par un acteur dans un film
class Role
    {   
        //attributes privées de la class Role
        private string $_role;
        private array $_actors;

        //definition de le costructor de la class Role
        public function __construct(string $role)
            {
                $this->_role = $role;
                $this->_actors = [];

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

        //function pour ajouter un actor à l'objet Role
        public function addActor(Film $new_actor)
            {
                $this->_actors[]= $new_actor;
            }
    }



?>