<!DOCTYPE html>
<html>
<head>
	<title>Embeding PHP in HTML</title>
	<style type="text/css">
		h1 {
			padding: 2em;
			text-align: center;
			background: gray;
		}
	</style>
</head>
<body>

	<h1>
		<?php
			$name = $_GET['name'];

			//$great = "Hello, World";
			
			echo "Hello, $name";

		?>
	</h1>

</body>
</html>