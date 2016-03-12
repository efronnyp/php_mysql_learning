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
	</head>
	<table border="1">
		<tr>
			<th width="25px">No.</th>
			<th width="200px">Name</th>
			<th width="80px">Nilai</th>
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
</html>
<?php $conn->close(); ?>