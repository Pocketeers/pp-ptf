<html>
<head><title>Job Finder</title>
<style>
table, th, td {
    border: 1px solid white;
}
th, td {
    padding: 5px;
}
</style>
</head>
	<body>
		<h2>Borang Memohon</h2>
		<table style="width:30%">
		<?php
		extract($_POST);

			echo"<tr>";
			echo "<td>Nama: </td>";
			echo strtoupper("<td>$nama</td>");
			echo"</tr>";
			echo"<tr>";
			echo "<td>Umur: </td>";
			echo "<td>$umur</td>";
			echo"</tr>";
			echo"<tr>";
			echo "<td>Pengalaman Bekerja: </td>";
			echo "<td>$kerja / $area</td>";
			echo"</tr>";
			echo"<tr>";
			echo "<td>Lampirkan Resume: </td>";
			echo "<td>$fail</td>";
			echo"</tr>";
			echo"<tr>";
			echo "<td>Nombor Telefon: </td>";
			echo "<td>$nombor</td>";
			echo"</tr>";
			echo"<tr>";
			echo "<td>Emel: </td>";
			echo "<td>$emel</td>";
			echo"</tr>";
		?>
		</table>
		<br>
		<button type="button" onclick="alert('Berjaya!')"><a href="index.php">OK</a></button>
	</body>
</html>