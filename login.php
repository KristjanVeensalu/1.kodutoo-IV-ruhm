<?php

//Mõte oli automaatne internetikiiruse mõõtja



	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$signupEmailerror = "*";
	
	if (isset ($_POST["signupEmail"])) {
		
	
		if (empty($_POST["signupEmail"])){
			$signupEmailerror="V2li on kohustuslik";
			
		}
	}
	
	
	
	
		$ageerror = "*";
	
	if (isset ($_POST["age"])) {
		
	
		if (empty($_POST["age"])){
			$ageerror="V2li on kohustuslik";
			
		}
	}
	
	
?>

<?php

	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$signupPassworderror = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
	
		if (empty($_POST["signupPassword"])){
			$signupPassworderror="V2li on kohustuslik";
			
		} else {
			
			if(strlen($_POST ["signupPassword"]) < 8 ){
				
				$signupPassworderror = "Parool peab olema v2hemalt 8 m2rki";
			}
		}
	}
	
	
?>

<?php

	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$questEmailerror = "*";
	
	if (isset ($_POST["questEmail"])) {
		
	
		if (empty($_POST["questEmail"])){
			$questEmailerror="V2li on kohustuslik";
			
		}
	}
	
	
?>


<?php

	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$ratingEmailerror = "*";
	
	if (isset ($_POST["ratingEmail"])) {
		
	
		if (empty($_POST["ratingEmail"])){
			$ratingEmailerror="V2li on kohustuslik";
			
		}
	}
	
	
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimine</title>
</head>
<body>

<h1>Logi Sisse</h1>
	
	<form method="POST">
		
		<input name="loginEmail" placeholder="E-mail" type="email">
		<br> <br>
		<input name="loginpassword" placeholder="Password" type="password">
		<br> <br>
		<input name="specialid" placeholder="Account ID" type="Identification">
		<br> <br>
		<input type="submit" value="Log in">
	</form>	
</body>

	<head>
		<title>Loo Kasutaja</title>
</head>
<body>

<h1>Loo kasutaja</h1>
	
	<form method="POST">
		
		<input name="signupEmail" placeholder="E-mail" type="email"> <?php   echo $signupEmailerror; ?>
		<br> <br>
		<input name="signupPassword" placeholder="Password" type="password"> <?php   echo $signupPassworderror; ?>
		<br> <br>
		<input name="age" placeholder="Vanus" type="age"> <?php   echo $ageerror; ?>
		<br> <br>
		<input type="submit" value="Loo kasutaja">
	</form>	
</body>
</html>


<html>
	<head>
		<title>Küsi meilt</title>
</head>
<body>

<h1>Küsi Meilt</h1>
	
	<form method="POST">
		
		<input name="questEmail" placeholder="Sinu E-mail" type="email">  <?php   echo $questEmailerror; ?>
		<br> <br>
		<input type="text" placeholder="Küsimus" type="text">
		<br> <br>
		<input type="submit" value="Saada küsimus">
	</form>	
</body>
</html>

<html>
	<head>
		<title></title>
</head>
<body>

<h1>Hinda lehekülge</h1>
	
	<form method="POST">
		
		<input name="ratingEmail" placeholder="Sinu Kasutaja" type="email">  <?php   echo $ratingEmailerror; ?>
		<br> <br>
		<input type="text" placeholder="Hinnang 1-10" type="text">
		<br> <br>
		<input type="submit" value="Hinda lehekülge">
	</form>	
</body>
</html>


