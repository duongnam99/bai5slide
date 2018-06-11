<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sủa tin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>/1.css">
 	<script src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
 	<script src="<?= base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">

					<h1 class="display-5"> Sửa tin</h1>
					<p class="lead"> Sửa tin</p>
					<hr class="m-y-md">
					
				</div>
				<div class="formthemmoi">
				<form action="<?= base_url() ?>Tin/luutindasua" method="post" enctype="multipart/form-data">

				<?php foreach ($dulieusua as $value): ?>
					<input type="hidden" name="id" value="<?= $value['id'] ?>">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tiêu đề tin</label>
						<input type="text" name="tieude" class="form-control" id="formGroupExampleInput" value="<?= $value['tieude'] ?>">
					</fieldset>
					<fieldset class="form-group">
					<img src="<?= $value['anhtin'] ?>" alt="" class="img-fluid">
						<input type="hidden" name="anhtincu" value="<?= $value['anhtin'] ?>">
						<label for="formGroupExampleInput">Ảnh tin</label>
						<input type="file" name="anhtin" class="form-control" id="formGroupExampleInput" >
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Trích dẫn</label>
						<input type="text" name="trichdan" class="form-control" id="formGroupExampleInput" value="<?= $value['trichdan'] ?>">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Danh mục tin</label>
						<select name="iddanhmuc" id="" class="form-control">
						
							<option value="<?= $value['iddanhmuc'] ?>"><?= $tendanhmuc ?></option>
						
											
						</select>
					</fieldset>

					<fieldset class="form-group">
						<label for="formGroupExampleInput">Nội dung tin</label>
						<textarea name="noidungtin" id="noidungtin" cols="40" rows="10" >
						<?= $value['noidungtin'] ?>
						</textarea>
					</fieldset>				
				
					<fieldset class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<input type="submit" class="btn btn-outline-info btn-lg" value="Sửa tin">
							</div>
							<div class="col-sm-6">
								<a href="<?= base_url() ?>Tin/xoatin/<?= $value['id'] ?>" class="btn btn-outline-danger btn-lg">Xóa tin</a>
							</div>
						</div>
						
					</fieldset>
					<?php endforeach ?>
				</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'noidungtin', {
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
	</script>
</body>
</html>