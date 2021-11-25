<!DOCTYPE html>
<html>
	<head>
		<title>Thông tin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
	    <script src="./bootstrap/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	</head>
	<body>
		<div class="container">
			<div class="modal" id="myModal">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Thông tin chi tiết</h4>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
							
							<?php 
								include 'connection.php';
								include 'controller.php';
								$id = $_GET['id'];
								// echo "ID :".$id;
								$sql = "select * from nhanvien where id =$id";
								$query = $conn->query($sql);
								$row = $query->fetch_array();

								$phongban = getPBbyID($row['idPB'],$conn);
								$chucvu = getCVbyID($row['idCV'],$conn);
								
							 ?>
							 <form action="confirm.php" method="post" id="delete_form">
								<input type="hidden" name="id" value="<?php echo $id ?>">
							</form>
							 <table class="table-bordered">
							 	<tr>
							 		<th style="width: 50px">ID</th>
							 		<th style="width: 150px">Họ tên</th>
							 		<th style="width: 100px">Giới tính</th>
							 		<th style="width: 100px">Ngày sinh</th>
							 		<th style="width: 150px">Địa chỉ</th>
							 		<th style="width: 100px">SDT</th>
							 		<th style="width: 100px">Lương</th>
							 		<th style="width: 100px">Bằng cấp</th>
							 		<th style="width: 100px">Phòng ban</th>
							 		<th style="width: 100px">Chức vụ</th>
							 	</tr>
							 	<tr>
							 		<td><?php echo $row['id'] ?></td>
							 		<td><?php echo $row['name'] ?></td>
							 		<td><?php echo $row['gender'] ?></td>
							 		<td><?php echo $row['dateofbirth'] ?></td>
							 		<td><?php echo $row['address'] ?></td>
							 		<td><?php echo $row['phone'] ?></td>
							 		<td><?php echo $row['salary'] ?></td>
							 		<td><?php echo $row['degree'] ?></td>
							 		<td><?php echo $phongban ?></td>

							 		<td><?php echo $chucvu ?></td>
							 		
						
							 	</tr>
							 </table>

						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
							<a href="http://localhost/responsive_website/trangchu" target="blank"  class="btn btn-danger">Close</a>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</body>
	<script>
		$(document).ready(function() {
			$("#myModal").modal("show");	
		});
	</script>
</html>