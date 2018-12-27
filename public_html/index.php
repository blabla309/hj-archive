<?php
/**
 * User: 김형주
 * Date: 2018-10-25
 */

require_once "/home/". get_current_user() . "/init/conf/def.php";
require_once _CONTROLLER_DIR . "/controller/Controller.php";

class Index{
  public function __construct(){
    #TEST
    $requestType = $_SERVER['REQUEST_METHOD'];

    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

    new FrontController();
    /*

    $path_arr = explode('/', $path);
    print <<<EOM
Path: {$path} <br/>
Query: {$query} <br/>
Request Type : $requestType

EOM;*/

  }
}

new Index();
exit;
?>