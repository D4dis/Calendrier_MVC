<?php

class User extends CoreEntity
{

  public $_id;
  public $_nom;
  public $_prenom;
  public $_departement;
  public $_derniere_connexion;
  public $caserne;
  public $unite;

  public function getId()
  {
    return $this->_id;
  }

  public function getNom()
  {
    return $this->_nom;
  }

  public function getPrenom()
  {
    return $this->_prenom;
  }

  public function getDepartement()
  {
    return $this->_departement;
  }

  public function getDerniereConnexion()
  {
    return $this->_derniere_connexion;
  }

  public function getCaserne()
  {
    return $this->caserne;
  }

  public function getUnite()
  {
    return $this->unite;
  }

  public function setId($_id): void
  {
    $this->_id = $_id;
  }

  public function setNom($_nom): void
  {
    $this->_nom = $_nom;
  }

  public function setPrenom($_prenom): void
  {
    $this->_prenom = $_prenom;
  }

  public function setDepartement($_departement): void
  {
    $this->_departement = $_departement;
  }

  public function setDerniere_Connexion($_derniere_connexion): void
  {
    $this->_derniere_connexion = $_derniere_connexion;
  }

  public function setCaserne($caserne): void
  {
    $this->caserne = $caserne;
  }

  public function setUnite($unite): void
  {
    $this->unite = $unite;
  }
}
