<?php

include_once __DIR__ . "/lib/config.php";
include_once ROOT . "/lib/function.php";




if($_POST && is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
{
	$uploadFile = FILES_DIR . basename($_FILES['fileToUpload']['name']);
	$status = upload($_FILES['fileToUpload']['tmp_name']);

}

dump($_POST);
if($_GET)
{
	
	if($_GET['action'] == 'delete')
	{
		$status  = deleteFile($_GET['name']);
	}

}

$files = getFileList(scandir(FILES_DIR));



include_once ROOT . "/templates/index.php";



?>
