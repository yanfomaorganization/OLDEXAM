<?php
session_start();
$pdo = null;
$minister="";
$concourtype="";
$minister_id="";
function connectDb(){
  global $pdo;

  try {
     $pdo = new PDO('mysql:host=localhost;dbname=examen', 'birba255S', 'usyviI0SHZA@');
  } catch (PDOException $e) {
    die('MySQL connection failed! ' . $e->getMessage());
  }
}
connectDb();
	
?>