<?php
if (!version_compare(PHP_VERSION, '7.0.0', '>=')) {
    exit("mLITE requires at least <b>PHP 7.0</b>");
}

define('DBHOST', 'localhost');
define('DBPORT', '3306');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'sik');

// URL Webapps
define('WEBAPPS_URL', 'http://localhost/mlite/uploads');
define('WEBAPPS_PATH', BASE_DIR . '/uploads');

// Multi APP
define('MULTI_APP', false);

// Admin cat name
define('ADMIN', 'admin');

// Themes path
define('THEMES', BASE_DIR . '/themes');

// Modules path
define('MODULES', BASE_DIR . '/plugins');

// Uploads path
define('UPLOADS', BASE_DIR . '/uploads');

// Lock files
define('FILE_LOCK', false);

// Basic modules
define('BASIC_MODULES', serialize([
    9 => 'settings',
    0 => 'dashboard',
    1 => 'master',
    2 => 'pasien',
    3 => 'rawat_jalan',
    4 => 'kasir_rawat_jalan',
    5 => 'kepegawaian',
    6 => 'farmasi',
    8 => 'users',
    7 => 'modules',
   10 => 'wagateway'
]));

// Developer mode
define('DEV_MODE', true);

?>
