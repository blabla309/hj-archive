<?php
/**
 * User: hjkim
 * Date: 2018-10-24
 */

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