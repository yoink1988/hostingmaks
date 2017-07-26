<?php

function dump($data)
{
    echo "<pre>";
    var_dump($data);    
    echo "</pre>";    
}   



function upload($tempName)
{
    if (file_exists(FILES_DIR))
    {
        $path= FILES_DIR . basename($_FILES['fileToUpload']['name']);
        
    //    if(substr(sprintf('%o', fileperms('/tmp')), -3) == '777')
	//	{
            if(move_uploaded_file($tempName, $path))
             {
                return SUCCESS;
             }
 //       }
        return NO_PERM;
    }
    return NO_DIR;
}


function getFileList(array $files)
{
	if(count($files) > 2)
	{
		static $id=1;
		$data = array();
		foreach ($files as $file)
		{
			if($file != '.' && $file !='..')
			{
				$file =  array ("id" => $id,
							"filename" => "$file",
							"size" => filesize(FILES_DIR . "$file"));
				$file['humanReadableSize'] = convertSize($file['size']);
				$data[] = $file;
			$id++;
			}
		}
		   return $data;
	}
	return EMPTY_DIR;
}



function convertSize($filesize)
{
	
	if($filesize >= 1024 && $filesize < pow(1024,2))
	{
		$filesize = number_format(($filesize * 0.0009765625),2,".","");
		$filesize .= 'Kb';
	}

	elseif($filesize >= pow(1024,2) && $filesize < pow(1024,3))
	{
		$filesize = number_format(($filesize * 0.0009765625 * 0.0009765625));
		$filesize .= 'Mb';
	}
	elseif($filesize >= pow(1024,3) && $filesize < pow(1024,4))
	{
		$filesize = number_format(($filesize * 0.0009765625 * 0.0009765625
															* 0.0009765625));
		$filesize .= 'Gb';
	}
	elseif($filesize >= pow(1024,4) && $filesize < pow(1024,5))
	{
		$filesize = number_format(($filesize * 0.0009765625 * 0.0009765625
															* 0.0009765625));
		$filesize .= 'Tb';
	}
	else
	{
		$filesize .='b';
	}

	return $filesize;
}


function deleteFile($fileToDelete)
{

	if(file_exists(FILES_DIR.$fileToDelete)){
		unlink(FILES_DIR.$fileToDelete);

//	foreach ($files as $file)
//	{
//		if($file['filename'] == $fileToDelete && (file_exists(FILES_DIR.$file['filename'])))
//		{
//			echo $file['filename'];
//				unlink(FILES_DIR.$file['filename']);
//			//	header('Location: index.php');
//			//	return ACCESS;
		
//		return NO_FILE;
	}
}


?>
