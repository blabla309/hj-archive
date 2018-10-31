<?php
/**
 * User: 김형주
 * Date: 2018-10-24
 */

require 'Dao.php';

Dao::getInstance("db1");
Dao::getInstance("db2");
Dao::getInstance("db1");
Dao::getInstance("db1");
Dao::getInstance("db3");
Dao::getInstance("db2");
?>