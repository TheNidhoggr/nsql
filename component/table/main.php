<?
	if (isset($_GET["db"]) && isset($_GET["act"])) {
		$pDB = $_GET["db"];
		include_once("table_" . $_GET["act"]);
	}
?>