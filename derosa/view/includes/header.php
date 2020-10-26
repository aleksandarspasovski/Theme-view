<!DOCTYPE html>
<html>
<head>
	<title>Derosa</title>
	<link rel="stylesheet" type="text/css" href="./public/css/main.css">
	<?php if (isset($this->css)): ?>
		
	<?php foreach ($this->css as $css): ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="'.URL.'view/'.$css.'">' ?>
	<?php endforeach ?>

	<?php endif ?>

	<?php if (isset($this->js)): ?>

	<?php foreach ($this->js as $js): ?>
	<?php echo '<script rel="stylesheet" type="text/javascript" src="'.URL.'view/'.$js.'"></script>' ?>
	<?php endforeach ?>

	<?php endif ?>
</head>
<body>
	<!-- position will be fixed so no need to wrapp nav-bar -->
		<nav class="nav-bar">
			<ul>
				<li><a href="<?php echo URL; ?>home">Home</a></li>
				<li><a href="<?php echo URL; ?>upload">Upload</a></li>
				<li><a class="reg" href="<?php echo URL; ?>register">Reqister</a></li>
			</ul>
		</nav>

<div class="wrapper">
	<!-- main page wrapper start here -->
