<?php

/* environment */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* database */
define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
define('SS_DATABASE_SERVER', 'db');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', 'password');
define('SS_DATABASE_NAME', 'ss');

/* default admin username and password */
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');

define('SS_ERROR_LOG', 'silverstripe.log');

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/code/www'] = 'http://localhost';
