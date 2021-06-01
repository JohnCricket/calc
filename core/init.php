<?php
/* Authomatically autoloading the classes needed */
spl_autoload_register(function($class) {
	require_once('./classes/' . $class . '.php');
});
