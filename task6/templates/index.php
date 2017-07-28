<html>
    <head>
		<link href="templates/style.css" rel="stylesheet"></link>
		<meta charset="utf-8">
    </head>

    <body>


		<div class="global-box">

			<div class="header">
			</div>
			<div class="content ">
				<div class="output">
				<?php
					if ($groups)
					{
						foreach ($groups as $group)
						{
							echo '<div class="group">';
							echo'<h2>'.$group['name'].'</h2>';
							echo '<h3>'.$group['genre'].'</h3>';
							echo '<p>Members</p>';
							foreach ($group['musiciants'] as $musician)
							{
								echo '<p>'.$musician['role'].'  <b>'.$musician['name'].'.</b></p>';
								echo '<p> plays on ';
								foreach ($musician['instrument'] as $type => $name)
								{
									echo $type.' - '.$name;
								}
								echo '</p>';
								echo '<p>plays in <br>';
								foreach ($musician['plays in'] as $group)
								{
									echo '<span class="gb">'.$group.'  <br>';
								}
							}
						echo '</div>';
						}




					}
				?>
				</div>
			</div>
		</div>

</body>

</html>