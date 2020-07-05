<?php

include_once("models/m_logs.php");
include_once('core/logs.php');

writeNewLog();

$allFiles = getAllLogFiles();

include "views/v_logs.php";