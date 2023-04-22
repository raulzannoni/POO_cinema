<?php

//creation de la class associative (Acteur - Role) Association  
class Association
    {
        //atributes provées por la class Association (Signature Unique de FILM - ACTOR - ROLE)
        private Film $_film;
        private Actor $_actor;
        private Role $_role;

        //constructor de la class Association
        public function __construct(Film $film, Actor $actor, Role $role)
            {
                $this->_film = $film;
                $this->_actor = $actor;
                $this->_role = $role;
            }
        
        //setter pour chaque attribute
        public function setFilm($film)
            {
                $this->_film = $film;
            }
        public function setActor($actor)
            {
                $this->_actor = $actor;
            }
        public function setRole($role)
            {
                $this->_role = $role;
            }
        //getter pour chaque attribute
        public function getFilm()
            {
                return $this->_film;
            }
        public function getActor()
            {
                return $this->_actor;
            }
        public function getRole()
            {
                return $this->_role;
            }


           
    }



?>