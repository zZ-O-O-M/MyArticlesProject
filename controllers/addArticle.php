<?php

include_once('models/m_articles.php');
include_once('core/arrayActions.php');
include_once('core/fields.php');
include_once ('core/logs.php');

writeNewLog();

// Variables

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = extractFields($_POST, ['title', 'content']);
    $err = validateArticleFields($data);
    if (empty($err)) {
        addArticle(['title' => $data['title'], 'content' => $data['content']]);
        header("Location: index.php");
    }
}

include "views/v_addArticle.php";