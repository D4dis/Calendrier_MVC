<?php

class CalendarController
{
  public function index()
  {
    session_destroy();
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
    require 'views/modalTrunc.php';
  }

  public function confirmTruncate(){
    $model = new CalendarModel();
    $model->delete();
    header('Location: index.php?ctrl=calendar');
  }

  public function deleteOneEvent(){
    require 'views/modalDel.php';
  }

  public function editOneEvent(){
    require 'views/modalEdit.php';
  }

  public function confirmDeleteOneEvent(){
    $model = new CalendarModel();
    $model->confirmDeleteOneEvent($_GET['id']);
    header('Location: index.php?ctrl=calendar');
  }

  public function confirmEditOneEvent(){
    $model = new CalendarModel();
    if(!empty($_POST['heureDebut']) || !empty($_POST['heureFin'])){
      $model->confirmEditOneEvent($_POST);
      unset($_SESSION);
      header('Location: index.php?ctrl=calendar');
    } else {
      $idPost = $_POST['id'];
      $_SESSION['error'] = "Vous ne pouvez pas entrer de données vides";
      // require 'views/modalEdit.php';
      header("Location: index.php?ctrl=calendar&action=editOneEvent&id=$idPost");
    }
  }

  public function exportCsv(){
    $model = new CalendarModel();
    $model->exportCsv();
  }

  public function exportPdf(){
    $model = new CalendarModel();
    $model->exportPdf();
  }

}
