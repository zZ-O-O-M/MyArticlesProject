<?php

include_once("core/files.php");

function getAllLogFiles() {
    return checkFiles("logs", scandir('logs'));
}

