<?php
// Start session
session_start();

// Require configfile
require_once $_SERVER['DOCUMENT_ROOT'] . '/BabbelHoek/config/config.php';

// Require helper files
require_once $_SERVER['DOCUMENT_ROOT'] . '/BabbelHoek/helpers/db_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/BabbelHoek/helpers/format_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/BabbelHoek/helpers/system_helper.php';

// Autoloader!!
function autoLoader($className)
{
    require_once 'lib/' . $className . '.php';
}

// Since php ver 7.2-> use spl_autoloader_register
spl_autoload_register('autoLoader');