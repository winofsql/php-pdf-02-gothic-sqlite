<?php
// ***************************
// 接続
// ***************************
$db = null;

try {
  $db = new PDO( "sqlite:../{$dbname}" );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch (PDOException $ex) {
  print $ex->getMessage();
}
