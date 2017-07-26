<html>
    <head>
		<link href="templates/style.css" rel="stylesheet"></link>
		<meta charset="cp-1251">
    </head>

    <body>


		<div class="global-box">

			<div class="header">
			</div>
			
			<div class="content">
				<form method="post" enctype="multipart/form-data" action="">
				<p><input type="file" name="fileToUpload">
				<input type="submit" accept="" name="Upload" >

				</form>

				
				<?php
				//dump($files);
					if(!empty($files))
					{
						echo "<table class=content-table>";
						$i=1;
						foreach ($files as $file)
						{
							echo "<tr><td>$i</td>";
							echo "<td>".$file['filename']."</td><td>".
									htmlspecialchars($file['humanReadableSize']).
									'</td><td><a href="index.php?name='.htmlspecialchars($file['filename']). '&action=delete' .'">Delete</a></td></tr>';
							$i++;
						}
						echo"</table>";
					}

					if (isset($status))
					{
						echo $status;
					}
				?>
			</div>
		</div>

</body>

</html>
