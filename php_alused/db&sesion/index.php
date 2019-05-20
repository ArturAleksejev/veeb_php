<?php
session_start();

require_once 'db/db_conf.php';
require_once 'db/db_fnc.php';
require_once 'lib/fnc.php';

if(!isset($_SESSION['user'])) {
    echo htmlContent('html/form.html');
} else {
    echo htmlContent('html/page1.html');
    echo htmlContent('html/logout.html');
}


