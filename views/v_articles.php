<a href="index.php?c=addArticle">Add article</a>
<hr>
<div class="articles">
    <? foreach ($articles as $id => $article): ?>
        <div class="article">
            <h2><?= $article['title'] ?></h2>
            <p><?= $article['content']?></p>
            <a href="index.php?c=article&id=<?=$article['id']?>">Read more</a>
        </div>
        <hr>
    <? endforeach; ?>
</div>

<br>
<br>
<a href="index.php?c=logs">Show logs</a>