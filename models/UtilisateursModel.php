<?php

class UtilisateursModel extends CoreModel
{

  private $_req;

  public function __destruct()
  {
    if (!empty($this->_req)) {
      $this->_req->closeCursor();
    }
  }

  public function getDepartement()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT d_nom, d_numero FROM departements GROUP BY d_numero');
      $this->_req->execute();
      $departements = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $departements;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

  public function userByDepartement(){
    try {
      $this->_req = $this->getDb()->prepare('SELECT COUNT(u_id) u_number, u_departement FROM utilisateurs GROUP BY u_departement');
      $this->_req->execute();
      $userByDep = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $userByDep;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

  public function userConnected(){
    try {
      $this->_req = $this->getDb()->prepare('SELECT COUNT(u_id) u_con_number FROM utilisateurs WHERE u_derniere_connexion < DATE_SUB(CURDATE(), INTERVAL 2 WEEK) GROUP BY u_departement;');
      $this->_req->execute();
      $userConnected = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $userConnected;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}
