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
	<table border="1px">
		<tr>
			<th width="25px">No.</th>
			<th width="200px">Name</th>
			<th width="80px">Nilai</th>
		</tr>
		<?php
		foreach ($result->fetch_all() as $currentItem) {
			echo
				"<tr>".
					"<td>".$currentItem[0]."</td>".
					"<td>".$currentItem[1]."</td>".
					"<td>".$currentItem[2]."</td>".
				"</tr>";
		}
		?>
	</table>
	<a href="insert.html"><button><u><font color="blue">Insert</font></u></button></a>
</html>
<?php $conn->close(); ?>