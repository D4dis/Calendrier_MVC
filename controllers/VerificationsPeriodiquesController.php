<?php

class VerificationsPeriodiquesController
{

  public function index()
  {
    require 'views/verificationsPeriodiques.php';
  }

  public function verifForm()
  {
    $model = new VerificationsPeriodiquesModel();
    $model->verifForm($_POST);
    require 'views/verificationsPeriodiques.php';
  }
}
