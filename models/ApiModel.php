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
      $this->_req = $this->getDb()->prepare("SELECT u_id id, u_nom nom, u_prenom prenom, u_departement departement, u_derniere_connexion derniere_connexion, c_nom caserne, n_nom unite
      FROM utilisateurs
      JOIN caserne ON c_id = u_caserne
      JOIN unite ON n_id = u_unite
      WHERE u_id = :id");
      $this->_req->bindValue(':id', $id);
      $this->_req->execute();
      $api = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $api;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}