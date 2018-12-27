<?php
/**
 * User: hjkim
 * Date: 2018-10-31
 */

define('_CUR_USR', get_current_user());
define('_USR_DIR', '/home/' . _CUR_USR);
define('_USR_WWW_DIR', _USR_DIR);
define('_BAS_URL', 'http://khj309.myzio.co.kr');

define('_USR_URL', _BAS_URL . '/~' . _CUR_USR);


define('_INI_HOM_DIR', _USR_DIR . '/init');
define('_LIB_HOM_DIR', _USR_WWW_DIR . '/lib');


define('_MKC_ADM_HOM_URL', _USR_URL . '/admin/mkc');

?>