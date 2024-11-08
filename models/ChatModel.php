<?php

class ChatModel extends CoreModel
{

  private $_req;

  public function insertMsg($post)
  {

    $msg = $_POST['message'];

    try {
      $this->_req = $this->getDb()->prepare('INSERT INTO message VALUES(DEFAULT, :msg)');
      $this->_req->bindValue(':msg', $msg);
      $this->_req->execute();
      
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

  public function getAllMsg(){
    try {
      $this->_req = $this->getDb()->prepare('SELECT m_content FROM message');
      $this->_req->execute();
      $datas = $this->_req->fetchAll(PDO::FETCH_ASSOC);
      return $datas;
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

  public function truncate()
  {
    try {
      $this->_req = $this->getDb()->prepare('TRUNCATE TABLE message');
      $this->_req->execute();
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}
