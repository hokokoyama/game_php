<?php

require 'Common.class.php';
require '../smarty-3.1.23/libs/smarty.class.php';
ini_set( 'display_errors', 1 );

$test = 1;

Common::pp($test);

$smarty = new Smarty();

$smarty->template_dir = dirname(__FILE__).'/templates';
$smarty->compile_dir = dirname(__FILE__).'/templates_c';

$smarty->assign('name','TOP');
$smarty->display('top.htm');

?>