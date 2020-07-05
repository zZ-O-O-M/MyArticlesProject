<div class="content">
    <? if ((!empty($article)) and (!empty($id))): ?>
			<div class="article">
				<h1><?= $article['title'] ?></h1>
				<div><?= $article['content'] ?></div>
				<hr>
				<a href="index.php?c=article&id=<?= $id ?>&delete_article=yes">Remove</a>
				<hr>
				<a href="index.php?c=editArticle&id=<?= $id ?>">Edit</a>
			</div>

    <? else:
        echo "Yooops"; ?>
    <? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>