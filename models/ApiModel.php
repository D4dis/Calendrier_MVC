<?php

class ApiModel extends CoreModel{
  private $_req;


  public function __destruct()
  {
    if (!empty($this->_req)) {
      $this->_req->closeCursor();
    }
  }

  public function getUserById($id){
    try {
      $this->_req = $this->getDb()->prepare("SELECT u_id, u_nom, u_prenom, u_departement, u_derniere_connexion, c_nom, n_nom
      FROM utilisateurs
      JOIN caserne ON c_id = u_caserne
      JOIN unite ON n_id = u_unite
      WHERE u_id = :id");
      $this->_req->bindValue(':id', $id);
      $this->_req->execute();
      $user = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $user;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  
  public function getCaserneById($id){
    try {
      $this->_req = $this->getDb()->prepare("SELECT c_id, c_nom
      FROM utilisateurs
      JOIN caserne ON c_id = u_caserne
      WHERE u_id = :id");
      $this->_req->bindValue(':id', $id);
      $this->_req->execute();
      $caserne = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $caserne;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  
  public function getUniteById($id){
    try {
      $this->_req = $this->getDb()->prepare("SELECT n_id, n_nom
      FROM utilisateurs
      JOIN unite ON n_id = u_unite
      WHERE u_id = :id");
      $this->_req->bindValue(':id', $id);
      $this->_req->execute();
      $unite = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $unite;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}