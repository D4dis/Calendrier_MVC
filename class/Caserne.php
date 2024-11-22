<?php

class Caserne extends CoreEntity
{

  private $_id;
  private $_nom;

  public function getId()
  {
    return $this->_id;
  }

  public function getNom()
  {
    return $this->_nom;
  }

  public function setId($_id): void
  {
    $this->_id = $_id;
  }

  public function setNom($_nom): void
  {
    $this->_nom = $_nom;
  }
}
