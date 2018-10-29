<?php 

include 'oop.php';
$nim=$_GET['nim'];
$result=$kalkulator->view_date($nim);
$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<form action="index.php" method="POST">
		Nama :<input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
		Nim :<input type="number" name="nim" value="<?php echo $row['nim'];?>"><br>
		Tgl_lahir :<input type="date" name="utgl_ahir" value="<?php echo $row['tgl_lahir'];?>"><br>
	</form>

</body>
</html>
