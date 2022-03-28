<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	class Car{
		public $color = "red";
		public $model = "2014";
		public function message(){
		echo $this -> color . "<br>";
		echo $this -> model;
		}
		
	}
	$new_car = new Car();
	$new_car -> message();

	
	?>
</body>
</html>