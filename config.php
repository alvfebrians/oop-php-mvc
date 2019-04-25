<?php
// DB Params
define("DB_HOST", "172.18.0.3");
define("DB_USER", "app");
define("DB_PASS", "senha");
define("DB_NAME", "app");

// Directory Separator
define('DS', DIRECTORY_SEPARATOR);

// App Root
// /webroot/public -> /webroot/app
define('APPROOT', dirname($_SERVER['DOCUMENT_ROOT']) . DS . 'app');
//define('APPROOT', dirname(dirname(__DIR__)));

// URL Root
define('URLROOT', 'http://localhost');

// Site Name
define('SITENAME', 'PHP MVC');