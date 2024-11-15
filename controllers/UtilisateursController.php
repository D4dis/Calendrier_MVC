<?php

class UtilisateursController
{
  public function index()
  {
    $model = new UtilisateursModel();
    $departements = $model->getDepartement();
    $departementsToJs = json_encode($departements);
    $userByDep = $model->userByDepartement();
    $userByDepToJs = json_encode($userByDep);
    $userConnected = $model->userConnected();
    $userConnectedToJs = json_encode($userConnected);
    require 'views/utilisateurs.php';
  }
}
