<?php

include_once('models/m_articles.php');
include_once ('core/logs.php');

writeNewLog();

$id = $_GET['id'];

if ($_GET['delete_article'] === "yes") {
    if (deleteArticle((int)$_GET['id'])) {
        header("Location: index.php");
    }
} else {
    $article = getOneArticle($_GET['id']);
}

$existArticle = $article !== false;

if ($existArticle) {
    include "views/v_article.php";
} else {
    header("HTTP/1.1 404 Not Found");
    include('views/errors/v_404.php');
}


