<?
error_reporting('E_ALL &~E_NOTICE');
ob_start();
include 'input.php';
define('XML', ob_get_clean());
