<?
	// auth.php
	// require_once("headers.php");
	session_start();
	if (isset($_GET["logout"]) == true) {
		$_SESSION["DB_CONNECTION"] = false;
		$_SESSION["USER_AUTHORIZED"] = false;
		header("Location: /nsql/");
	}
	if (isset($_SESSION["USER_AUTHORIZED"]) != true || $_SESSION["USER_AUTHORIZED"] != true) {
		if (isset($_POST["NOW_AUTH"]) != true || $_POST["NOW_AUTH"] != "yes") {
			define("AUTH", false);
		}
	}
	if (isset($_POST["NOW_AUTH"]) == true && $_POST["NOW_AUTH"] == "yes") {
		$mysqli = new mysqli;
		$server = $_POST["DB_SERVER"];
		$user = $_POST["DB_USER"];
		$password = $_POST["DB_PASSWORD"];
		$_SESSION["DB_CONNECTION"] = mysqli_connect($server, $user, $password) or die("Error");
		$GLOBALS["CONNECTION"] = mysqli_connect($server, $user, $password);
		$_SESSION["USER_AUTHORIZED"] = true;
		$_SESSION["USER_NAME"] = $user;
		$_SESSION["USER_PSWD"] = $password;
		$_SESSION["DB_SERVER"] = $server;
		define("AUTH", true);	
	}