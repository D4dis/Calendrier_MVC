<?php

abstract class CoreEntity
{
  
  public function __construct(array $data)
  {
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst(substr($key, 2, strlen($key) - 2));
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
}
