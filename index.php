<?
	// index.php
	require_once("config.php");
	require_once("auth.php");
	$_connect;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>nSQL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" />
	</head>
	<body>
		<?
			if (!AUTH) {
				?>
					<form method="post" id="loginform">
						<input type="hidden" name="NOW_AUTH" value="yes" />
						<input type="text" name="DB_SERVER" placeholder="localhost" value="0.0.0.0"/><br />
						<input type="text" name="DB_USER" placeholder="Username" value="root"/><br />
						<input type="password" name="DB_PASSWORD" placeholder="******" value=""/><br />
						<input type="submit" value="Login" />
					</form>
				<?
			} else {
				$_connect = mysqli_connect($_SESSION["DB_SERVER"], $_SESSION["USER_NAME"], $_SESSION["USER_PSWD"]);
				include_once("module/main/function.php");
				include_once("ui/panel.php");
				if (isset($_GET["view"]) == true) {
					switch($_GET["view"]) {
						case "db": {
							include_once("component/db/main.php");
							if (isset($_GET["db"])) {
								switch ($_GET["db"]) {
									default: {
							
									}
								}
							}
							break;
						}
						case "table": {
							include_once("component/table/main.php");
						}
					}
				}
			}
		?>
	</body>
</html>