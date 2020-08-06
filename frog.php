<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		class Frog extends Animal{
			public $name = 'buduk<br>';
			public $legs = 4;
			public function jump(){
				echo '<br>Hop Hop<br>';
			}
		}
	
	?>
</body>
</html>