<?php

class User extends CoreEntity
{

  private $_id;
  private $_nom;
  private $_prenom;
  private $_departement;
  private $_derniere_connexion;
  private $_caserne;
  private $_unite;

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
    return $this->_caserne;
  }

  public function getUnite()
  {
    return $this->_unite;
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

  public function setDerniereConnexion($_derniere_connexion): void
  {
    $this->_derniere_connexion = $_derniere_connexion;
  }

  public function setCaserne($_caserne): void
  {
    $this->_caserne = $_caserne;
  }

  public function setUnite($_unite): void
  {
    $this->_unite = $_unite;
  }
}
