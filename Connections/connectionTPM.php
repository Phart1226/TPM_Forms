<?php

    $conn = new mysqli("31.220.110.218", "u886168621_tpm", "OrangeTPM123", "u886168621_tpm");

	//check connection
	if($conn -> connect_errno){
		echo "Connection Error: " . $conn -> connect_error;
		exit();
    }

?>