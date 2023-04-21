<?php

//creation de la class Person
class Person
    {  

        //creation de liste des attributes protected
        protected string $_nom;
        protected string $_prenom;
        protected string $_sexe;
        protected DateTime $_date_naissance;
  
        //creation de le constructor de la personne
        public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
            {
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_sexe = $sexe;
                $this->_date_naissance = new DateTime($date_naissance);
            }


        //setter pour chaque attribute
        public function setNom($nom)
            {
                $this->_nom = $nom;
            }
        public function setPrenom($prenom)
            {
                $this->_prenom = $prenom;
            }
        public function setSexe($sexe)
            {
                $this->_sexe = $sexe;
            }
        public function setDateNaissance($date_naissance)
            {
                $this->_date_naissance = $date_naissance;
            }

        //getter pour chaque attribute
        public function getNom()
            {
                return $this->_nom;
            }
        public function getPrenom()
            {
                return $this->_prenom;
            }
        public function getSexe()
            {
                return $this->_sexe;
            }
        public function getDateNaissance()
            {
                return $this->_date_naissance;
            }

        //creation de le methode toString pour afficher le nom et prenom de la personne
        public function __toString()
            {
                return $this->_prenom." ".$this->_nom;
            }

    }






?>