<!DOCTYPE html>
<html>
<head>
	<title>Input Identitas Pegawai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div class="container">

			<form action="php/create.php" method="post">
			<h4 class="display-6 text-center"> Input Identitas Pegawai</h4><hr><br>
			<?php if(isset($_GET['error'])) {?>
			<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']?>
			</div>
		<?php } ?>
			<div class="form-group">
		    <label for="name">NAMA</label>
		    <input type="name" class="form-control" id="name" name = "name" value = "<?php if(isset($_GET['name'])) echo ($_GET['name']); ?>"placeholder="Nama">
		  	</div>

		  <div class="form-group">
		    <label for="email">EMAIL</label>
		    <input type="email" class="form-control" id="email" name= "email" value = "<?php if(isset($_GET['email'])) echo ($_GET['email']); ?>" placeholder="Email">
		  </div>

  		<button type="submit" class="btn btn-primary" name= "tambah">Tambah</button>
  		<a href="read.php" class="link-primary">Lihat</a>
  		</form>
		</div>			
</body>
</html>