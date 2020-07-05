<?php
// target - ассоциативный одномерный массив
// fields - обычный массив, который содержит список строк с полями

function extractFields(array $target, $fields): array {
    $res = [];

    foreach ($fields as $field) {
        $res[$field] = trim($target[$field]);
    }

    return $res;
}

function checkExtraRows(array $lines): array {
    foreach ($lines as $key => $line) {
        if ($line == '') {
            unset($lines[$key]);
        }
    }
    return $lines;
}