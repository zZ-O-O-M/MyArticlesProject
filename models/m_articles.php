<?php

include_once "core/db.php";

function getAllArticles() {
    $res = dbQuery('SELECT * FROM articles ORDER BY dt_add');
    return $res->fetchAll();
}

function getOneArticle(int $id) {
    $res = dbQuery('SELECT * FROM articles WHERE id=:id', ['id' => $id]);
    return $res->fetch();
}

function addArticle(array $fields): bool {
    $res = dbQuery("INSERT INTO articles (title, content) VALUES (:title,:content)", $fields);
    return true;
}

function deleteArticle(int $id): bool {
    $res = dbQuery("DELETE FROM articles WHERE id=:id", ['id' => $id]);
    return true;
}

function editArticle(array $fields): bool {
    $res = dbQuery("UPDATE `articles` SET title=:title,content=:content WHERE id=:id", $fields);
    return true;
}