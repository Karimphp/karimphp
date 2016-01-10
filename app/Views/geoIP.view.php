<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Search IP</title>
	</head>
	<body>
		<form action="/" method="post">
			<p>IP: <input type="text" name="IP"><br></p>
			<p>Netmask: <input type="text" name="NETMASK"><br></p>
			<input type="submit">
		</form>

		<ul>
			<?php
				$name = array('Red', 'Ciudad', 'Pais', "Latitud", "Longitud","Codigo Postal");

				for($i=0;$i<count($result);$i++){
					echo "<li><b>".$name[$i].": </b>".$result[$i]."</li>";
				}
			?>
		</ul>
	</body>
</html>