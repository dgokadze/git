<?php
/**
 * @package 			ITDCMS
 * @copyright 		Copyright (C) 2001 - 2014 ITDC, JSC. All rights reserved.
 * @license 			Commercial license
 */
set_include_path(dirname(__FILE__));

date_default_timezone_set('Asia/Tbilisi');


$_PATH = '../';

// Set the current directory correctly for CLI requests
if (defined('STDIN')) {
	chdir(dirname(__FILE__));
}

// The name of this file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// Path to the front entry point (this file)
define('FCPATH', str_replace(SELF, '', __FILE__));


$system_path = FCPATH.$_PATH.'system';

$system_path_full = (realpath($system_path) !== FALSE) ? realpath($system_path).'/' : $system_path;

define('BASEPATH', str_replace("\\", "/", $system_path_full));

if (!is_dir(BASEPATH)) {
	exit('System path not set correctly.');
}


require_once BASEPATH.'common/common.php';
