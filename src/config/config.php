<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

$dir = dirname(__FILE__);

//Gerais
define('DAILY_TIME', 60 * 60 * 8);

//Paths
define("MODEL_PATH", realpath($dir . '/../models'));
define("VIEW_PATH", realpath($dir . '/../views'));
define("TEMPLATE_PATH", realpath($dir . '/../views/template'));
define("CONTROLLER_PATH", realpath($dir . '/../controllers'));
define("EXCEPTION_PATH", realpath($dir . '/../exceptions'));

//Arquivos
require_once(realpath($dir . '/database.php'));
require_once(realpath($dir . '/loader.php'));
require_once(realpath($dir . '/session.php'));
require_once(realpath($dir . '/date_utils.php'));
require_once(realpath($dir . '/utils.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/User.php'));
require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));