<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh muc tin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>/1.css">
</head>
<body>
	<?php include 'header_backend.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
		        <div class="jumbotron jumbotron-fluid text-xs-center">
					<div class="container">
						<h1 class="display-5">Thêm danh mục</h1>
						<p class="lead">Form này cho phép thêm danh mục vào cơ sở dữ liệu</p>
					</div>
				</div>
		
				<!-- <form action="<?php //echo base_url(); ?>Tin/themdanhmuc" method="post"> -->
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tên</label>
						<input name="tendanhmuc" type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục">
					</fieldset>
					<fieldset class="form-group">
						<input type="button" class="form-control btn btn-outline-success" id="nutthemdanhmuc" value="Thêm">
					</fieldset>
				<!-- </form> -->
	
			</div> <!-- het coot trai -->
			<div class="col-sm-6 cacdanhmuc">
		        <div class="jumbotron jumbotron-fluid text-xs-center">
					<div class="container">
						<h1 class="display-5">Danh sách danh mục tin</h1>
						<p class="lead">Các danh muc tin đã thêm</p>
					</div>
				</div>
				<?php foreach ($dulieu as $value): ?>
					<div class="card card-inverse card-success mb-3 text-center">
					  <div class="card-block">
					 	
					 	<div class="thaotac text-xs-right">
					 		<a data-href="<?= base_url()?>Tin/suadanhmuc/<?= $value['id'] ?>" class="btn btn-warning nutedit"><i class="fa fa-pencil"></i></a>			   
					 		<a data-href="<?= $value['id'] ?>" class="btn btn-danger nutxoa"><i class="fa fa-remove"></i></a>			 
					 	</div> 
					 	<div class="jquery_button text-xs-right hidden-sm-up">
					 		<a href="" class="btn btn-primary nutluu">Lưu</a>	   
					 	</div> 
					 	<h4 class="card-blockquote">
					 	
					 		<fieldset class="form-group jquery_tendanhmuc hidden-sm-up">
					 			<input type="hidden" class="form-control id" value="<?= $value['id'] ?>">
					 			<input type="text" class="form-control tendanhmucsua" value="<?= $value['tendanhmuc'] ?>">
					 		</fieldset>
					 		<div class="noidung_ten">
					 			<?= $value['tendanhmuc'] ?>
					 		</div>
					 		
					 	</h4>
					  </div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>/1.js"></script>
 	<script>
 		$(function(){
 			var duongdan = '<?php echo base_url() ?>';

 			$('html,body').on('click', '.nutedit', function(event) {
 				$(this).parent().addClass('hidden-sm-up');
 				$(this).parent().next().next().find('.noidung_ten').addClass('hidden-sm-up');
 				$(this).parent().next().removeClass('hidden-sm-up');
 				$(this).parent().next().next().find('.jquery_tendanhmuc').removeClass('hidden-sm-up');

 				event.preventDefault();
 				/* Act on the event */
 			});
 			$('html,body').on('click', '.nutluu', function(event) {
 				
 				// sử dụng jquery ajax để kết nối vào thao tác với cơ sở dữ liệu:
 				var giatriten = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmucsua').val();
 				var giatriid = $(this).parent().next().children('.jquery_tendanhmuc').children('.id').val();
 				// console.log(giatri);
 				var phantu1 = $(this).parent().addClass('hidden-sm-up');
 				var phantu2 = $(this).parent().next().children('.jquery_tendanhmuc').addClass('hidden-sm-up');
 				var noidung = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmucsua').val();
 				// cho hiển thị các nút nhưu thường
 				var hienthi1 = $(this).parent().prev().removeClass('hidden-sm-up');
 				var hienthi2 = $(this).parent()
 				.next()
 				.children('.noidung_ten')
 				.html(noidung) // set noi dung
 				.removeClass('hidden-sm-up');

 				$.ajax({
 					url: duongdan + 'Tin/updateDanhmuc',
 					type: 'POST',
 					dataType: 'json',
 					data: {
 						id: giatriid,
 						tendanhmuc: giatriten},
 				})
 				.done(function() {
 					console.log("success");
 				})
 				.fail(function() {
 					console.log("error");
 				})
 				.always(function() {
 					console.log("complete");
 				});
 				
 				event.preventDefault();
 				/* Act on the event */
 			});

 		
 			// bat su kien click
 			$('#nutthemdanhmuc').click(function(event) {
 				/* Act on the event */
 				// var tendanhmuc = $('#tendanhmuc').val();
 
 				$.ajax({
 					url: duongdan + 'Tin/addJquery',
 					type: 'POST',
 					dataType: 'json',
 					data: {tendanhmuc: $('#tendanhmuc').val()}
 					// success: function(res){
 					// 	console.log(res);
 					// } // (Cach 1)
 				})
 				.done(function() {
 					// console.log("success");
 				})
 				.fail(function() {
 					// console.log("error");
 				})
 				.always(function(res) {
 					console.log(res); // res để truyền đưọc gía trị id vào trong html ngay sau khi thêm bằng jquery ajax 
 					// dung jquery ve ra noi dung:
 					var noidung = '<div class="card card-inverse card-success mb-3 text-center">';
 					noidung += '<div class="card-block">';
 					noidung += '<h4 class="card-blockquote">';
 					noidung += '<div class="noidung_ten">';
 					noidung += $('#tendanhmuc').val();
 					noidung += '</div>';
 					noidung += '</h4>';
 					noidung += '<div class="thaotac text-xs-right">';
 					noidung += '<a data-href="'+res+'" class="btn btn-warning nutedit"><i class="fa fa-pencil"></i></a>';
 					noidung += '<a data-href="'+res+'" class="btn btn-danger nutxoa"><i class="fa fa-remove"></i></a>	';
 					noidung += '</div> ';
 					noidung += '</div> ';
 					// thêm  vào thẻ bao:
 					$('.col-sm-6.cacdanhmuc').append(noidung);
 					// đạt lại nội dung bằng rỗng
 					$('#tendanhmuc').val('');
 				});
 				
 			});// het phan nut them moi

 			// xoa bang jquery
			$('html,body').on('click','.nutxoa', function(event){ //dùng hàm on để có thể lắng nghe mọi thay dổi trên body, nhưn thế mới có thể xóa đưọc ngay sau khi thêm mà không cần rêload
				var idtin = $(this).data('href');
 				var doituongcanxoa = $(this).parent().parent().parent();
 					$.ajax({
 						url: duongdan + 'Tin/xoadanhmuc/' + idtin,
 						type: 'POST',
 						dataType: 'json'					
 					})
 					.done(function() {
 						console.log("success");
 					})
 					.fail(function() {
 						console.log("error");
 					})
 					.always(function() {
 						console.log("complete");
 						// dung jquery xoa luon
 						doituongcanxoa.remove();
 					});
			});

 		})

 	</script>
</body>
</html>