<?
error_reporting('E_ALL &~E_NOTICE');
echo '
';
ob_start();
include 'input.php';
define('XML', ob_get_clean());
preg_match_all('/<([a-z]*)\b/',XML,$m);
foreach($m[1] as$n){echo"
$p$n";$p.='    ';}