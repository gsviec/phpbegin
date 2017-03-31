<?php

require 'boostrap.php';

$config = require 'config.php';

require 'upload.view.php';

if (isset($_FILES['upload'])) {

	$dest = UPLOAD_PATH . $_FILES['upload']['name'];
	
	if (move_uploaded_file($_FILES['upload']['tmp_name'], $dest)) {
		
		echo "Upload file success!";
		exit();
	}

	echo "Upload file not success!";
}