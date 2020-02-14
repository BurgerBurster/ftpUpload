<?php

$ftp_server = "localhost";
$ftp_user_name = "admin";
$ftp_user_pass = "root";

$file = $_FILES["fileToUpload"]["tmp_name"];
$remote_file = "upload_" . $_FILES["fileToUpload"]["name"];
$type = $_FILES["fileToUpload"]["type"];

$conn_id = ftp_connect($ftp_server);

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

$upload_success = ftp_put($conn_id, $remote_file, $file, FTP_BINARY);

if($upload_success)
	echo "File uploaded successfully.";
else
	echo "Upload error.";

ftp_close($conn_id);

?>