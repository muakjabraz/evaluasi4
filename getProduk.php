<!DOCTYPE html>
<html>
<head>
	<title>Belajar Dasar Ajax</title>
	<style>
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table, td, th {
			text-align: center;
			border: 1px solid black;
			padding: 5px;
		}

		th{
			text-align: center;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	$q = intval($_GET['q']);

	$con = mysqli_connect('localhost', 'root', '');
	if (!$con){
		die('Could not connect:'.mysqli_error($con));
	}

	mysqli_select_db($con, "tsa_web");
	$sql = "SELECT * FROM produk_desain WHERE kategori = '". $q ."'";
	$result = mysqli_query($con, $sql);
	?>
	<table border="1">
     <tr style="background-color: blue; color: white;">
       <th>Nama Produk</th>
       <th>Harga Produk</th>
       <th>Gambar</th>
     </tr>
      <?php foreach ($result as $data) : ?>
        <tr>
          <td><?php echo $data['nama_produk']; ?></td>
          <td><?php echo $data['harga_produk']; ?></td>
          <td><img width="200" title="<?php echo $data['gambar']; ?>" src="image/<?php echo $data['gambar']; ?>"></td>
        </tr>
      <?php endforeach; ?>
   	</table>
	<?php
	mysqli_close($con);
	?>
</body>
</html>