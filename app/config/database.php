<?php
define('PRODUCTION', false);
if (PRODUCTION) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'id14855054_id14855054_administrator');
    define('DB_PASS', ']x~8y?#p{)b#YCzx');
    define('DB_NAME', 'id14855054_palmamora_db');
    define('DB_PORT', 3306);
}else{
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'id14855054_palmamora001');
    define('DB_PORT', 3306);
}
