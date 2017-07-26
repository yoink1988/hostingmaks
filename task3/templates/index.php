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
				<?php
					echo $data;
				?>
				<form method="post" action="">
				<input type="submit" name="viewAll" value="Display File">
				</form>
				<form method="post" action="">показать строку<p>номер строки<input type="text" name="string"/><input type="submit" name="ShowString">
				</form>
				<form method="post" action="">показать символ<p>номер строки<input type="text" name="string"/>символ<input type="text" name="char"/> <input type="submit" name="charInString">
				</form>
				<form method="post" action="">заменить строку<p>номер строки<input type="text" name="string"/>на что заменить<input type="text" name="newData"/><input type="submit" name="replaceString">
				</form>
				<form method="post" action="">заменить символ в строке<p>номер строки<input type="text" name="string"/><p>номер символа<input type="text" name="char"/><p>на что заменить<input type="text" name="newData"/> <input type="submit" name="replaceCharInString">
				</form>




			</div>
		</div>

</body>

</html>
