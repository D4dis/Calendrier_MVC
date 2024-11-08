<?php

class ChatController {
  public function index(){
    $model = new ChatModel();
    $msgs = $model->getAllMsg();
    require 'views/chat.php';
  }

  public function sendMsg($post){
    $model = new ChatModel();
    $model->insertMsg($post);
  }

  public function truncate(){
    $model = new ChatModel();
    $model->truncate();
    header('Location: index.php?ctrl=chat');
  }
}