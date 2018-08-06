<?php

//require("vendor/autoload.php");
require_once 'assets/srcPHP/Model/Config/Paths.php';
require_once 'assets/srcPHP/Model/Config/Database.php';


spl_autoload_register(function ($class) {
    include path_router. $class .'.php';
});

$bootstrap = new Bootstrap();
$bootstrap->init();
//$Controller = new Controller();

