<?php

class ApiController {
  public function index(){
    $model = new ApiModel();
    $api = $model->getUserById($_GET['id']);
    echo json_encode($api, JSON_UNESCAPED_UNICODE);
  }
}