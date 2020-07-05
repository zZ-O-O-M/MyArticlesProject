<div>
    <? foreach ($allFiles as $file): ?>
			<a style="text-decoration: none" href="index.php?c=log&fileName=<?= $file ?>"><?= $file ?></a>
			<hr>
    <? endforeach; ?>
</div>

<a href="index.php">Main page</a>
