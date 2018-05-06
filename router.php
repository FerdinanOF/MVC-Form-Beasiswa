<?php

// setup auto loader
set_include_path("class/");
spl_autoload_extensions(".class.php");
spl_autoload_register();

// ambil informasi path info
$pathInfo = $_SERVER['PATH_INFO'];

// ambil controller dan method dari path info
$mvc = explode("/", $pathInfo);
$controller = $mvc[1];
$method = $mvc[2];

// instansiasi controller
$c = new $controller();

// panggil method dari controller
call_user_func(array($c, $method));
