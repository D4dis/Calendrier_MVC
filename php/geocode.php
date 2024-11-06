<?php

$ch = curl_init("http://api.openweathermap.org/geo/1.0/zip?zip=34080,FR&appid=1e82cbd03eb6546ea6f00f5fd1721c2a");

curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer');

$data = curl_exec($ch);
if($data === false){
  var_dump(curl_error($ch));
} else {

}

curl_close($ch);