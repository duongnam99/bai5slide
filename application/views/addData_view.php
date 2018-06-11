<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới slide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>/1.css">
</head>
<body>
        <nav class="navbar navbar-light bg-faded">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
           
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="#">Admin:</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>/Slides">Thêm Slide <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/Do_edit">Sửa Slide</a>
              </li>
              
            </ul>
          </div>
        </nav>
<div class="container">
	<div class="row">
		<div class="col-sm-6 push-sm-3">
		<h3 class="text-xs-center">Thêm mới Slide</h3>
		<hr>
			<form method="post" action="Slides/addSlide" enctype="multipart/form-data">
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Tiêu đề Slide</label>
					<input name="title" type="text" class="form-control" id="title" placeholder="Tiêu đề">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Mô tả Slide</label>
					<input name="description" type="text" class="form-control" id="description" placeholder="Mô tả Slide">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Link của nút</label>
					<input name="button_link" type="text" class="form-control" id="button_link" placeholder="Link của nút">
				</fieldset>

				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Text của nút</label>
					<input name="button_text" type="text" class="form-control" id="button_text" placeholder="Text của nút">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Upload Ảnh</label>
					<input name="slide_image" type="file" class="form-control" id="slide_image">
				</fieldset>
				<fieldset class="form-group">
					<input type="submit" class="form-control btn btn-outline-success" id="submit" value="Nhập">
				</fieldset>
			</form>
		</div>
	</div>
</div>
	
</html>