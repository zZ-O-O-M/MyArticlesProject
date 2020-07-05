<?php

$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";

if (file_exists($path)) {
//preg_match ($cname);
    include_once($path);
}

	