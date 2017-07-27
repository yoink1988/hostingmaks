<?php

include_once __DIR__ . "/lib/config.php";
include_once ROOT . "/lib/FileEditor.php";

$data="";

if(isset($_POST['viewAll']))
{
	$file = new FileEditor(FILE_PATH);
	$data = $file->display();

}

if(isset($_POST['ShowString']) && !empty($_POST['string']))
{
	$file = new FileEditor(FILE_PATH);
	$data = $file->readString($_POST['string']);
}
	

if(isset($_POST['charInString']) && (!empty($_POST['string']) && !empty($_POST['char'])))
{
	$file = new FileEditor(FILE_PATH);
	$data = $file->readChar($_POST['string'], $_POST['char']);
}

if(isset($_POST['replaceString']) && (!empty($_POST['string']) && !empty($_POST['newData'])))
{
	$file = new FileEditor(FILE_PATH);
	$data = $file->writeString($_POST['string'], $_POST['newData']);
}

if(isset($_POST['replaceCharInString']) && (!empty($_POST['string']) && !empty($_POST['char']) && !empty($_POST['newData'])))
{
	$file = new FileEditor(FILE_PATH);
	$data = $file->writeChar($_POST['string'], $_POST['char'], $_POST['newData']);
}

include_once ROOT . "/templates/index.php";


?>
