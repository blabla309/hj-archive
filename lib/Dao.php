<?php
/**
 * User: hjkim
 * Date: 2018-10-24
 */
require_once "/home/". get_current_user() . "/init/conf/def.php";


class Dao{
  private static $daoInstances = array();
  private $dbName;
  private $connection;
  private $psmt;
  private $result;


  private function __construct($dbName){
    $this->dbName = $dbName;
    $this->connect();
  }

  public function __destruct(){
    unset($this->daoInstances[$this->dbName]);
    $this->close();
  }

  public static function getInstance($dbName, $params=array()){
    $dao=null;
    if(key_exists($dbName, self::$daoInstances)){
      $dao = self::$daoInstances[$dbName];
    }

    if(!$dao){
      $dao = new Dao($dbName);
      self::$daoInstances[$dbName] = $dao;
    }

    return $dao;
  }
  public function connect(){
    $ini = parse_ini_file(_INI_HOM_DIR . '/conf/db.ini', true);
    $dbInfo = $ini[$this->dbName];

    switch ($dbInfo['type']){
      case 'pgsql':
        //PDO Host String
        $connectionStr= "pgsql:host={$dbInfo['host']};port=5432;dbname={$dbInfo['db']};";
        break;
      case 'mysql':case 'mariadb':
        $connectionStr= "mysql:host={$dbInfo['host']};port=3306;dbname={$dbInfo['db']};";
        break;
    }

    //PDO function
    $this->connection = new PDO($connectionStr, $dbInfo['user'], $dbInfo['pw']);

    if($this->connection){

    }
  }

  public function close(){
    $this->connection = null;
  }

  public function excute($query, $param=array()){

  }

  public function fetch(){

  }


}

?>
