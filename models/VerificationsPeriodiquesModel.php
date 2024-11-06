<?php 


class VerificationsPeriodiquesModel{

  public function verifForm($data) {
    if (isset($data['value']) && $data['value'] == 'nonConforme'){
      $_SESSION['error'] = "Un point de contrôle non conforme doit provoquer l’isolement du site jusqu’à la
      remise en état";
    }
  }

}