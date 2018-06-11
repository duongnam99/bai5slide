<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa slide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>/1.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-6 push-sm-3">
		<h3 class="text-xs-center">Sửa Slide</h3>
			<?php $count = 0 ?>
			<form method="post" action="Do_edit/suaSlide" enctype="multipart/form-data">
			<?php foreach ($mangdl as $key => $value): ?>
			<?php $count++;?>
				<hr>
				<h4>Slide số: <?= $count; ?></h4>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Tiêu đề Slide</label>
					<input name="title[]" type="text" class="form-control" id="title" value="<?= $value['title'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Mô tả Slide</label>
					<input name="description[]" type="text" class="form-control" id="description" value="<?= $value['description'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Link của nút</label>
					<input name="button_link[]" type="text" class="form-control" id="button_link" value="<?= $value['button_link'] ?>">
				</fieldset>

				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Text của nút</label>
					<input name="button_text[]" type="text" class="form-control" id="button_text" value="<?= $value['button_text'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Upload Ảnh</label>
					<img src="<?= $value['slide_image'] ?>" alt="" width="40%">
					<input name="slide_image_old[]" type="hidden" class="form-control" value="<?= $value['slide_image'] ?>">
					<input name="slide_image[]" type="file">
				</fieldset>	
			<?php endforeach ?>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-success" id="submit" value="Nhập">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</html>