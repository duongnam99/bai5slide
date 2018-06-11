<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh muc tin</title>
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
		        <div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-5">Sửa danh mục</h1>
						<p class="lead">Form này cho phép sửa danh mục vào cơ sở dữ liệu</p>
					</div>
				</div>
				<form action="<?php echo base_url(); ?>Tin/updateDanhmuc" method="post">
				<?php foreach ($mangdl as $value): ?>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tên</label>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
						<input name="tendanhmuc" type="text" class="form-control" id="formGroupExampleInput" value="<?= $value['tendanhmuc']?>">
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-outline-success" id="formGroupExampleInput2" value="Lưu">
					</fieldset>
				<?php endforeach ?>
					
				</form>
			</div> <!-- het coot trai -->
			</div>
		</div>
	</div>
</body>
</html>