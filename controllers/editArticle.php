<?php

include_once "models/m_articles.php";
include_once "core/arrayActions.php";
include_once "core/fields.php";
include_once ('core/logs.php');

writeNewLog();

$id = $_GET['id'];

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $fields = getOneArticle((int)$id);
    $_SESSION['success_edit'] = false;
} else {
    $fields = extractFields($_POST, ['title', 'content']);
    $err = validateArticleFields($fields);

    $fields['id'] = (int)$id;

    if (empty($err)) {
        $res = editArticle($fields);
        if ($res) {
            $_SESSION['success_edit'] = true;
        } else {
            echo "Error!";
        }
    }
}
$existArticle = $fields !== false;

if ($existArticle) {
    include "views/v_editArticle.php";
} else {
//    поправить из массива $_SERVER
    header("HTTP/1.1 404 Not Found");
    include('views/errors/v_404.php');
}


