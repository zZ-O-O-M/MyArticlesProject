<?php

function checkFiles(string $dir, array $filesList): array {
    $res = [];
    foreach ($filesList as $file) {
        if (is_file($dir . '/' . $file)) {
            $res[] = $file;
        }
    }
    return $res;
}

//function getDataFromFileAsArray(string $path): array {
//
//}

function getDataFromFileAsString(string $path): string {
    return file_get_contents($path);
}