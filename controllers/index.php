<?php

include_once('models/m_articles.php');
include_once('core/logs.php');

writeNewLog();


if (isset($_GET['cat_id'])) {
    $articles = getAllArticlesByExactlyCat((int)$_GET['cat_id']);
} else {
    $articles = getAllArticles();
}


// Show all articles
include "views/v_articles.php";
