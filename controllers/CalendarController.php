<?php

class CalendarController
{
  public function index()
  {
    $model = new CalendarModel();
    $dataCountSuivi = $model->count();
    $dataArrive = $model->dataArrive();
    $dataDepart = $model->dataDepart();
    $dataDepartSub = $model->departSub();
    $dataArriveSub = $model->arriveSub();
    $datasTache = $model->tacheToJson();
    $datasSuivi = $model->suiviToJson();
    $datasSuiviToJs = json_encode($datasSuivi);
    $datasTacheToJs = json_encode($datasTache);
    require 'views/calendar.php';
  }

  public function insertMatin(){
    $model = new CalendarModel();
    $model->insert1();
    header('Location: index.php');
  }

  public function updateMatin(){
    $model = new CalendarModel();
    $model->update1();
    header('Location: index.php');
  }

  public function insertAprem(){
    $model = new CalendarModel();
    $model->insert2();
    header('Location: index.php');
  }

  public function updateAprem(){
    $model = new CalendarModel();
    $model->update2();
    header('Location: index.php');
  }

  public function truncate(){
    $model = new CalendarModel();
    $model->truncate();
    header('Location: index.php');
  }

}
