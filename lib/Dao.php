<?php
/**
 * User: hjkim
 * Date: 2018-10-24
 */

class Dao{
  private static $daoInstances;
  private $dbName;
  private $connection;
  private $psmt;
  private $result;


  private function __construct($dbName){
    $this->dbName = $dbName;
    $this->connect();
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
    $ini = parse_ini_file(_COM_INI_HOM_DIR . '/cfg/db.ini', true);
    $dbInfo = $ini[$this->dbName];

    #TEST
    $dbinfo['type'] = 'psgql';
    $dbinfo['host'] = 'hj_archive';
    $dbinfo['pw'] = 'gudwn309((';
    $dbinfo['db'] = 'hj_archive';

    switch ($dbInfo['type']){
      case 'pgsql':
        //PDO Host String
        $connectionStr= "pgsql:host={$dbInfo['host']};port=5432;dbname={$dbInfo['db']};user={$dbInfo['user']};password={$dbInfo['pw']}";
        break;
      case 'mysql':
        $connectionStr= "mysql:host={$dbInfo['host']};port=3306;dbname={$dbInfo['db']};user={$dbInfo['user']};password={$dbInfo['pw']}";
        break;
      case 'mariadb':
        break;
    }

    //PDO function
    $this->connection = new PDO($connectionStr);

    if($this->connection){
      print "Connected Successfully";
    }


  }
  public function disConnect(){}
  public function close(){}
  public function excute($query, $param=array()){

  }

  public function fetch(){

  }


}

?>