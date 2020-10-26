<p class="intro">poz iz uploada index page</p>

<div class="container">
	<form action="<?php echo URL; ?>upload/uploadImage" method="post" enctype="multipart/form-data">
		<label>Choose image</label><br>
		<input type="text" name="name">
		<input type="text" name="last_name">
		<input type="file" name="upload">
		<input type="submit" value="Upload">
	</form>
</div>

<div class="list-img">
	<div class="header-title">
		<h1>Alla bilden om Aleksandar Spasovski och Molly Sanden</h1>
	</div>
	<?php foreach ($this->img as $image) :?>
	<div class="images">
		<a href="<?php echo $image['img_path']; ?>" target="_blank"><img src="<?php echo $image['img_path']; ?>" title="<?php echo $image['name']; ?>"></a>
	</div>
	<?php endforeach; ?> 
</div>