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
    header('Location: index.php?ctrl=VerificationsPeriodiques');
  }
}
