<?php
/**
 * User: 김형주
 * Date: 2018-10-25
 */

require_once "/home/". get_current_user() . "/init/conf/def.php";
require_once _CONTROLLER_DIR . "/FrontController.php";

class Index{
  public function __construct(){
    new FrontController();
  }
}

new Index();
exit;
?>
