<?php
/**
 * User: 김형주
 * Date: 2018-10-25
 * Time: 오후 5:12
 */

class Index{
  public function __construct(){
    #TEST
    $requestType = $_SERVER['REQUEST_METHOD'];
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    print <<<EOM
Path: {$path}
Request Type : $requestType

EOM;
  }
}

new Index();
exit;
?>