<?php
// Start session
session_start();

// Require configfile
require_once $_SERVER['DOCUMENT_ROOT'] . '/projects/BabbelHoek/config/config.php';

// Require helper files
require_once BASE_URI . '/helpers/db_helper.php';
require_once BASE_URI . '/helpers/format_helper.php';
require_once BASE_URI . '/helpers/system_helper.php';

// Autoloader!!
function autoLoader($className)
{
    require_once BASE_URI . 'lib/' . $className . '.php';
}

// Since php ver 7.2-> use spl_autoloader_register
spl_autoload_register('autoLoader');