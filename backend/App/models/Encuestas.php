<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Encuestas{


  public static function insert($datos){
    $mysqli = Database::getInstance(1);
    $query=<<<sql
    INSERT INTO encuesta 
    (nombre, email, preg_1, preg_2, preg_3, preg_3_txt, preg_4, preg_5_1, preg_5_2, preg_5_3, preg_5_4, preg_5_5, preg_5_6,
    preg_5_7, preg_5_8, preg_5_9, preg_5_10, preg_5_11, preg_5_12, preg_6, preg_7, preg_7_1, preg_8, preg_9) 
    VALUES 
    (:nombre, :email, :preg_1, :preg_2, :preg_3, :preg_3_txt, :preg_4, :preg_5_1, :preg_5_2, :preg_5_3, :preg_5_4, :preg_5_5, :preg_5_6,
    :preg_5_7, :preg_5_8, :preg_5_9, :preg_5_10, :preg_5_11, :preg_5_12, :preg_6, :preg_7, :preg_7_1, :preg_8, :preg_9);
sql;



  $parametros = array(
    ':nombre'=>$datos->_nombre,
    ':email'=>$datos->_email,
    ':preg_1'=>$datos->_preg_1,
    ':preg_2'=>$datos->_preg_2,
    ':preg_3'=>$datos->_preg_3,
    ':preg_3_txt'=>$datos->_preg_3_txt,
    ':preg_4'=>$datos->_preg_4,
    ':preg_5_1'=>$datos->_preg_5_1,
    ':preg_5_2'=>$datos->_preg_5_2,
    ':preg_5_3'=>$datos->_preg_5_3,
    ':preg_5_4'=>$datos->_preg_5_4,
    ':preg_5_5'=>$datos->_preg_5_5,
    ':preg_5_6'=>$datos->_preg_5_6,
    ':preg_5_7'=>$datos->_preg_5_7,
    ':preg_5_8'=>$datos->_preg_5_8,
    ':preg_5_9'=>$datos->_preg_5_9,
    ':preg_5_10'=>$datos->_preg_5_10,
    ':preg_5_11'=>$datos->_preg_5_11,
    ':preg_5_12'=>$datos->_preg_5_12,
    ':preg_6'=>$datos->_preg_6,
    ':preg_7'=>$datos->_preg_7,
    ':preg_7_1'=>$datos->_preg_7_1,
    ':preg_8'=>$datos->_preg_8,
    ':preg_9'=>$datos->_preg_9,
  );
  $id = $mysqli->insert($query,$parametros);
  return $id;
}

public static function insertTaller($datos){
  $mysqli = Database::getInstance(1);
  $query=<<<sql
  INSERT INTO encuesta_taller
  (nombre, email, preg_1_1, preg_1_2, preg_2, preg_3, preg_4, preg_5, preg_6, preg_7) 
  VALUES 
  (:nombre, :email, :preg_1_1, :preg_1_2, :preg_2, :preg_3, :preg_4, :preg_5, :preg_6, :preg_7);
sql;



$parametros = array(
  ':nombre'=>$datos->_nombre,
  ':email'=>$datos->_email,
  ':preg_1_1'=>$datos->_preg_1_1,
  ':preg_1_2'=>$datos->_preg_1_2,
  ':preg_2'=>$datos->_preg_2,
  ':preg_3'=>$datos->_preg_3,
  ':preg_4'=>$datos->_preg_4,    
  ':preg_5'=>$datos->_preg_5,
  ':preg_6'=>$datos->_preg_6,
  ':preg_7'=>$datos->_preg_7,
);
$id = $mysqli->insert($query,$parametros);
return $id;
}

public static function searchUserEncuesta($email){
    $mysqli = Database::getInstance();
    $query=<<<sql
    SELECT * FROM encuesta WHERE email = '$email'
sql;
  return $mysqli->queryAll($query);
}

public static function searchUserEncuestaTaller($email){
  $mysqli = Database::getInstance();
  $query=<<<sql
  SELECT * FROM encuesta_taller WHERE email = '$email'
sql;
return $mysqli->queryAll($query);
}


public static function getUserEncuesta($usuario){
  $mysqli = Database::getInstance();
  $query=<<<sql
  SELECT ra.id_registro_acceso,ra.nombre,ra.segundo_nombre,ra.apellido_paterno,ra.apellido_materno,ra.email,ra.clave
  FROM registros_acceso ra
  WHERE ra.email = '$usuario'
sql;
return $mysqli->queryAll($query);
}

}