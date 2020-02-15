<?php
//session start
session_start(); 
//config file
require_once 'config.php';
//include helper
require_once'helpers/system_helper.php';
//Autoloader
function __autoload($class_name){
	require_once 'lib/'.$class_name. '.php'; 
}