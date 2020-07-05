<form method="post" class="form">
	<label for="title">Title:</label>
	<br>
	<input type="text" id="title" name="title" value="<?= $data['title'] ?>">
    <? if (!empty($err['title'])): ?>
			<p style="color: red"><?= $err['title'] ?></p>
    <? endif; ?>
	<br>

	<label for="content">Content:</label>
	<br>
	<textarea id="content" name="content"><?= $data['content'] ?></textarea>
    <? if (!empty($err['content'])): ?>
			<p style="color: red"><?= $err['content'] ?></p>
    <? endif; ?>
	<br>
	<br>

	<input type="submit" value="add article">
	<br>
	<br>
</form>
<hr>
<a href="index.php">Move to main page</a>