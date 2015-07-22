<?php
		$name="nihaoit";
		$value="hello";
		$expire=time()-(60*60*7);
		setcookie($name,$value,$expire);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie</title>
</head>
<body>
	<?php
		/*if($_COOKIE['nihaoit']){
			var_dump($_COOKIE['nihaoit']);
		}*/
		isset($_COOKIE['nihaoit'])? var_dump($_COOKIE['nihaoit']) :'';
	?>
</body>
</html>