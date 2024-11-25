<?php

class ApiController
{
  public function index()
  {
    $model = new ApiModel();
    if(!isset($_GET['id']) || empty($_GET['id'])){
      require 'views/404.php';
    }
    $userDatas = $model->getUserById($_GET['id']);
    if(empty($userDatas)){
      $error = 'Veuillez entrer un ID correct';
      require 'views/404.php';
    } else {
      $caserneDatas = $model->getCaserneById($_GET['id']);
      $uniteDatas = $model->getUniteById($_GET['id']);
      $caserne = new Caserne($caserneDatas);
      $unite = new Unite($uniteDatas);
      $user = new User($userDatas, $caserne);
      $user->caserne = $caserne;
      $user->unite = $unite;
      $json = json_encode($user);
      require 'views/api.php';
    }
  }
}
