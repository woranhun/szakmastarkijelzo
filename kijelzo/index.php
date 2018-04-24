<?php
	if (session_status() == PHP_SESSION_NONE) {
 			session_start();
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="style.css">
		<title>Eredményjelző</title>
	</head>
	<body>
		<header>
			<h1>Lego Robot Csata eredmények:</h1>
		</header>
			<?php
				if(isset($_POST['leftADD'])||isset($_POST['rightADD'])){
				if(isset($_POST['leftADD']))$_SESSION['bal'] ++;
				if(isset($_POST['rightADD']))$_SESSION['jobb'] ++;
				}
				if(isset($_POST['reset'])){
						if(isset($_SESSION['bal'])) $_SESSION['bal']=0;
						if(isset($_SESSION['jobb']))$_SESSION['jobb']=0;
				}
		 ?>
		<table style="width:100%">
			<tr>
				<th>KKT</th>
				<th id ="VS">VS</th>
				<th>KariTomi</th>
			</tr>
			<tr>
				<th><h2><?php if(isset($_SESSION['bal']))echo $_SESSION['bal']; else echo'0' ?></h2></th>
				<th></th>
				<th><h2><?php if(isset($_SESSION['jobb']))echo $_SESSION['jobb']; else echo'0' ?></h2></th>
			</tr>
			<tr>
				<form method="POST">
				<th><input type="Submit" name="leftADD" value="Nyert"></th>
				<th></th>
				<th><input type="Submit" name="rightADD" value="Nyert"></th>
			</form>
			</tr>
			<tr>
				<th></th>
				<form method="POST" >
					<th><input type="Submit" name="reset" value="reset"></th>
				</form>
				<th></th>
			</tr>
		</table>
		<div class="clear"></div>
		<footer>
			<table style="width:100%">
				<tr>
					<th><img src="./src/pics/umszki-logo.png"/></th>
					<th><p>UMSZKI Szakma Sztár verseny 2018</p></th>
					<th><img src="./src/pics/umszki-logo.png"/></th>
				</tr>
			</table>
		</footer>
	</body>
</html>