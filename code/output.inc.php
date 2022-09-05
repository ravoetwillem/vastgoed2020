<?php
require_once("../smarty/mySmarty.inc.php");
require_once("../php_lib/menu.inc.php");
require_once("../php_lib/inlezen.inc.php");

$_smarty->assign('inhoud',$_inhoud);
$_smarty->assign('commentaar',inlezen($_commentaar));
$_smarty->assign('menu',menu($_menu));
$_smarty->display('LedenAdmin.tpl');
?>