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
    $datasSuiviJs = $model->suiviToJson();
    $datasSuivi = $model->suiviOfDay();
    $datasSuiviToJs = json_encode($datasSuiviJs);
    $datasTacheToJs = json_encode($datasTache);
    require 'views/calendar.php';
  }

  public function insertMatin(){
    $model = new CalendarModel();
    $model->insert1();
    header('Location: index.php?ctrl=calendar');
  }

  public function updateMatin(){
    $model = new CalendarModel();
    $model->update1();
    header('Location: index.php?ctrl=calendar');
  }

  public function insertAprem(){
    $model = new CalendarModel();
    $model->insert2();
    header('Location: index.php?ctrl=calendar');
  }

  public function updateAprem(){
    $model = new CalendarModel();
    $model->update2();
    header('Location: index.php?ctrl=calendar');
  }

  public function delete(){
    $model = new CalendarModel();
    $model->delete();
    header('Location: index.php?ctrl=calendar');
  }

  public function deleteOneEvent(){
    require 'views/calendar.php';
  }

  public function confirmDeleteOneEvent(){
    $model = new CalendarModel();
    $model->confirmDeleteOneEvent($_GET['id']);
    header('Location: index.php?ctrl=calendar');
  }

}
