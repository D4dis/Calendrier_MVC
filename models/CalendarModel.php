<?php

class CalendarModel extends CoreModel
{

  private $_req;


  public function __destruct()
  {
    if (!empty($this->_req)) {
      $this->_req->closeCursor();
    }
  }

  public function count()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT COUNT(*) count FROM suivi WHERE DATEDIFF(s_heure_debut, :day) = 0');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
      $dataCountSuivi = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $dataCountSuivi;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function dataArrive()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT s_status, s_heure_debut, s_heure_fin FROM suivi WHERE DATEDIFF(s_heure_debut, :day) = 0 AND s_status = 1');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
      $dataArrive = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $dataArrive;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function dataDepart()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT s_status, s_heure_debut, s_heure_fin FROM suivi WHERE DATEDIFF(s_heure_debut, :day) = 0 AND s_status = 0');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
      $dataDepart = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $dataDepart;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function insert1()
  {
    try {
      $this->_req = $this->getDb()->prepare('INSERT INTO suivi VALUES(DEFAULT, CURRENT_TIMESTAMP, 1, NULL)');
      $this->_req->execute();
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function insert2()
  {
    try {
      $this->_req = $this->getDb()->prepare('INSERT INTO suivi VALUES(DEFAULT, CURRENT_TIMESTAMP, 0, NULL)');
      $this->_req->execute();
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function update1()
  {
    try {
      $this->_req = $this->getDb()->prepare('UPDATE suivi SET s_heure_fin = CURRENT_TIMESTAMP WHERE s_status = 1 AND DATEDIFF(s_heure_debut, :day) = 0');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function update2()
  {
    try {
      $this->_req = $this->getDb()->prepare('UPDATE suivi SET s_heure_fin = CURRENT_TIMESTAMP WHERE s_status = 0 AND DATEDIFF(s_heure_debut, :day) = 0');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function departSub()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT TIMESTAMPDIFF(SECOND, s_heure_debut, s_heure_fin) AS difference FROM suivi WHERE DATE(s_heure_debut) = :jour AND s_status = 0');
      $this->_req->bindValue(':jour', $today = date("Y-m-j"));
      $this->_req->execute();
      $dataDepartSub = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $dataDepartSub;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function arriveSub()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT TIMESTAMPDIFF(SECOND, s_heure_debut, s_heure_fin) AS difference FROM suivi WHERE DATE(s_heure_debut) = :jour AND s_status = 1');
      $this->_req->bindValue(':jour', $today = date("Y-m-j"));
      $this->_req->execute();
      $dataArriveSub = $this->_req->fetch(PDO::FETCH_ASSOC);
      return $dataArriveSub;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function delete()
  {
    try {
      $this->_req = $this->getDb()->prepare('DELETE FROM suivi WHERE DATEDIFF(s_heure_debut, :day) = 0');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function tacheToJson()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT * FROM taches');
      $this->_req->execute();
      $datasTache = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $datasTache;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function suiviToJson()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT * FROM suivi');
      $this->_req->execute();
      $datasSuiviToJs = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $datasSuiviToJs;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  public function suiviOfDay()
  {
    try {
      $this->_req = $this->getDb()->prepare('SELECT * FROM suivi WHERE DATE(s_heure_debut) = :day');
      $this->_req->bindValue(':day', $today = date("Y-m-j"));
      $this->_req->execute();
      $datasSuivi = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $datasSuivi;
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

public function confirmDeleteOneEvent($id){
  try {
    $this->_req = $this->getDb()->prepare('DELETE FROM suivi WHERE s_id = :id');
    $this->_req->bindValue(':id', $id);
    $this->_req->execute();
  } catch (Exception $e) {
    $e->getMessage();
  }
}

}
