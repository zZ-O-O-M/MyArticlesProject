<form method="post" class="form">
	<label for="title">Title:</label>
	<br>
	<input type="text" id="title" name="title" value="<?= $fields['title'] ?>">
    <? if (!empty($err['title'])): ?>
			<p style="color: red"><?= $err['title'] ?></p>
    <? endif; ?>
	<br>

	<label for="content">Content:</label>
	<br>
	<textarea id="content" name="content"><?= $fields['content'] ?></textarea>
    <? if (!empty($err['content'])): ?>
			<p style="color: red"><?= $err['content'] ?></p>
    <? endif; ?>
	<br>
	<br>
	<select name="cat_id" id="category">
		<option value="<?= $art['cat_id'] ?>"><?= $art['cat_name'] ?></option>
      <? foreach ($allCategories as $category): ?>
				<option value="<?= $category['cat_id'] ?>"><?= $category['cat_name'] ?></option>
      <? endforeach; ?>
	</select>

	<input type="submit" value="Change article">
	<br>
	<br>
</form>

<? if ($_SESSION['success_edit'] === true and empty($err)): ?>
	<p style="color: blueviolet">All done!</p>
<? endif; ?>
<hr>
<a href="index.php">Move to main page</a>