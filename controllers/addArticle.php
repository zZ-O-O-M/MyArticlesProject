<?php

include_once('models/m_articles.php');
include_once('core/arrayActions.php');
include_once('core/fields.php');
include_once('core/logs.php');

writeNewLog();

// Variables

$allCategories = getCategories(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = extractFields($_POST, ['title', 'content', 'cat_id']);
    $err = validateArticleFields($data);

    $data['cat_id'] = (int)$data['cat_id'];
    if (empty($err)) {
        addArticle(['title' => $data['title'], 'content' => $data['content'], 'cat_id' => $data['cat_id']]);
        header("Location: index.php");
    }
}

include "views/v_addArticle.php";