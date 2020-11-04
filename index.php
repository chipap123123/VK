<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.name{
			color:#496A9E;
			font-weight:700;
		}
		.job{
			color: #6B7885;
			font-weight: 100;
		}
		.birthdate{
			color:#496A9E;
			font-weight:300;
		}
		.header{
			background-color: #4A76A8;
		}
	</style>
</head>
<body style="background-color: #EDEEF0">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','vk');
		$query = mysqli_query($con, "SELECT * FROM friends");

	 ?>
	 <div class="col-12 header" style="height: 80px;"></div>
	 <div class="col-4 mx-auto bg-white">
	 	<?php 
	 		//цикл начинается
	 		for($i=0;$i<3;$i++){
	 			$stroka = $query->fetch_assoc();
	 		?>
	 			
	 			<div class="border-bottom p-2">
	 				<div class="row">
	 					<div class=" col-2 rounded-circle" style="height: 100px; width: 100px; background-image: url(<?php echo $stroka["img"]; ?>); background-position: center; background-size: cover">	 						 											
	 					</div>
	 					<div class="col-8">
	 						<p class="name"><?php echo $stroka["name"]; ?></p>
	 						<p class="birthdate"><?php echo $stroka["birthdate"]; ?></p>
	 						<p class="job"><?php echo $stroka["job"]; ?></p>
	 					</div>
	 					<div class="col-2">
	 							<form action="delete.php" method="GET" class="ok">
	 								<input class="form-control" style="display: none;" name="id" value="<?php echo $stroka["id"]?>">
	 								<button class="btn btn-danger">Удалить</button>
	 							</form>				
	 					</div>
	 				</div>
	 			</div>

	 		
	 		<?php  } ?>
	 	
	 </div>
	 <script type="text/javascript">
	 	let a = document.querySelector(".btn");
	 	let b = document.querySelector(".ok");
	 	a.onclick = function(){
	 		ok.style.display = none;
	 	}
	 </script>
</body>
</html>