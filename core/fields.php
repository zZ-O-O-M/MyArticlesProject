<?php

function validateArticleFields(array &$field): array {
    $minSizeContent = 5;
    $maxSizeContent = 1000;

    $errors = [];
    if (strlen($field['title']) < 3 or strlen($field['title']) > 30) {
        $errors['title'] = 'Title must consist 3-30 characters';
    }

    if (strlen($field['content']) < $minSizeContent or strlen($field['content']) > $maxSizeContent) {
        $errors['content'] = "Content must consist $minSizeContent-$maxSizeContent characters";
    }

    if (empty($errors)) {
        $field['title'] = htmlspecialchars($field['title']);
        $field['content'] = htmlspecialchars($field['content']);
    }

    return $errors;
}


