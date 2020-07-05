<?php

function getDataForLog(): string {
    $current_date = date('d.m.Y');

    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $referer = $_SERVER['HTTP_REFERER'];

    return $current_date . " -- " . $url . " -- " . $referer . "\n";
}

function writeNewLog() {
    $current_date = date('d.m.Y');
    $path = "logs/" . $current_date;
    $data = getDataForLog();
    file_put_contents($path, $data, FILE_APPEND);
}
