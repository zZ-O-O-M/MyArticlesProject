<?php

include_once "models/m_articles.php";
include_once "core/arrayActions.php";
include_once "core/fields.php";
include_once('core/logs.php');

writeNewLog();

$id = $_GET['id'];

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $art = $fields = getOneArticle((int)$id);
    $allCategories = getCategories((int)$fields['cat_id']);
    $_SESSION['success_edit'] = false;
} else {
    $fields = extractFields($_POST, ['title', 'content', 'cat_id']);
    $err = validateArticleFields($fields);

    $fields['id'] = (int)$id;
    $fields['cat_id'] = (int)$fields['cat_id'];

    if (empty($err)) {
        $res = editArticle($fields);
        if ($res) {
            $_SESSION['success_edit'] = true;
        } else {
            echo "Error!";
        }
    }

    $art = getOneArticle((int)$id);
    $allCategories = getCategories((int)$art['cat_id']);
}
$existArticle = $fields !== false;

if ($existArticle) {
    include "views/v_editArticle.php";
} else {
//    поправить из массива $_SERVER
    header("HTTP/1.1 404 Not Found");
    include('views/errors/v_404.php');
}


