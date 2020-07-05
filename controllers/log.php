<?php

include_once("core/files.php");
include_once("core/arrayActions.php");
include_once ('core/logs.php');

writeNewLog();

$fileName = htmlspecialchars($_GET['fileName']);

if (isset($fileName)) {
    $data = getDataFromFileAsString("logs" . "/" . $fileName);
    $data = explode("\n", $data);
    $data = checkExtraRows($data);
    include "views/v_log.php";
} else {
    header("HTTP/1.1 404 Not Found");
    include('views/errors/v_404.php');
}

