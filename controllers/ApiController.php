<?php

class ApiController
{
  public function index()
  {
    $model = new ApiModel();
    $userDatas = $model->getUserById($_GET['id']);
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
