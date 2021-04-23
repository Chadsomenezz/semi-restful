<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>


<section class="container">
			<form action="../edit_process/<?=$result[0]->id;?>" method="post" class="form">
				<h2>Edit Product</h2>
				<div class="form-group my-3">
					<label>Name:<input type="text" class="form-control" name="name" value="<?= $result[0]->name;?>"></label>
				</div>
				<div class="form-group my-3">
					<label>Price:<input type="text" class="form-control" name="price" value="<?= $result[0]->price;?>"></label>
				</div>

				<div class="form-group my-3">
					<label>Description:<input type="text" class="form-control" name="description" value="<?= $result[0]->description;?>"></label>
				</div>
				<input type="hidden" name="id" value="<?= $result[0]->id;?>">
				<input type="submit" class="btn btn-primary my-3">
			</form>
</section>

</body>
</html>
