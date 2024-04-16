<?php
require_once 'connection.php';

// Read php_mysql_test
$result = $conn->query("SELECT * FROM php_mysql_test.siswa");
if (!$result) {
	echo "No Data";
}
?>
<html>
<head>
	<title>Mari Belajar Supaya Lulus</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
</head>
<body>
	<div style="height: 30px; margin: 10px 5px;">
		<b>Edit Mode</b>
		<input type="checkbox" name="my-checkbox">
	</div>
	<table id="tbl-mahasiswa" border="1">
		<tr>
			<td class="header" width="25px">No.</td>
			<td class="header" width="200px">Name</td>
			<td class="header" width="80px">Nilai</td>
		</tr>
		<?php
		foreach ($result->fetch_all() as $currentItem) {
		?>
				<tr>
					<td><?=$currentItem[0] ?></td>
					<td><?=$currentItem[1] ?></td>
					<td><?=$currentItem[2] ?></td>
				</tr>
		<?php
		}
		?>
	</table>
	<a href="insert.html"><button>Insert</button></a>
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
<?php $conn->close(); ?>
