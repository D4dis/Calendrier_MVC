<?php

class ApiController
{
  public function index()
  {
    $model = new ApiModel();
    $userDatas = $model->getUserById($_GET['id']);
    $caserneDatas = $model->getCaserneById($_GET['id']);
    $uniteDatas = $model->getUniteById($_GET['id']);
    $user = new User($userDatas);
    $caserne = new Caserne($caserneDatas);
    $unite = new Unite($uniteDatas);

    // echo json_encode($api, JSON_UNESCAPED_UNICODE);
    require 'views/api.php';
  }
}
