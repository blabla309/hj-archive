<?php
/**
 * User: 김형주
 * Date: 2018-10-24
 * Time: 오후 5:34
 */
require_once "../domain/Domain.php";

abstract class Repository{
  public $tableName;

  abstract public function listAll();
  abstract public function listByParam( $param);
  abstract public function get($key);
  abstract public function delete($keys);
  abstract public function insert($object);
  abstract public function update($object);
  private function getQueryWhere($param){

  }


  private function getQueryOrder($param){

  }


  private function getQueryLimit($param){

  }
}

?>