<?php

include_once('models/m_articles.php');
include_once ('core/logs.php');

writeNewLog();

$articles = getAllArticles();

// Show all articles
include "views/v_articles.php";
