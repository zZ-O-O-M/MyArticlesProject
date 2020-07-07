<?php

include_once "core/db.php";

function getAllArticles() {
    $res = dbQuery('SELECT * FROM articles JOIN category ON articles.cat_id=category.cat_id ORDER BY dt_add');
    return $res->fetchAll();
}

function getOneArticle(int $id) {
//    SELECT * FROM `products` JOIN category ON products.id_cat = category.id_cat
    $res = dbQuery('SELECT * FROM articles JOIN category ON articles.cat_id=category.cat_id WHERE articles.id=:id',
        ['id' => $id]);
    return $res->fetch();
}

function addArticle(array $fields): bool {
    $res = dbQuery("INSERT INTO articles (title, content, cat_id) VALUES (:title, :content, :cat_id)", $fields);
    return true;
}

function deleteArticle(int $id): bool {
    $res = dbQuery("DELETE FROM articles WHERE id=:id", ['id' => $id]);
    return true;
}

function editArticle(array $fields): bool {
    $res = dbQuery("UPDATE `articles` SET title=:title,content=:content, cat_id=:cat_id WHERE id=:id", $fields);
    return true;
}

function getCategories(int $id) {
    $res = dbQuery("SELECT * FROM category WHERE cat_id !=:id ORDER BY cat_name", ['id' => $id]);
    return $res->fetchAll();
}