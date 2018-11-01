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

    print "Request Type : $requestType <br/>";
    print_r($_GET['param']);
  }
}

new Index();
exit;
?>