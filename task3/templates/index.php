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
				<form method="post" action="">�������� ������<p>����� ������<input type="text" name="string"/><input type="submit" name="ShowString">
				</form>
				<form method="post" action="">�������� ������<p>����� ������<input type="text" name="string"/>������<input type="text" name="char"/> <input type="submit" name="charInString">
				</form>
				<form method="post" action="">�������� ������<p>����� ������<input type="text" name="string"/>�� ��� ��������<input type="text" name="newData"/><input type="submit" name="replaceString">
				</form>
				<form method="post" action="">�������� ������ � ������<p>����� ������<input type="text" name="string"/><p>����� �������<input type="text" name="char"/><p>�� ��� ��������<input type="text" name="newData"/> <input type="submit" name="replaceCharInString">
				</form>




			</div>
		</div>

</body>

</html>
