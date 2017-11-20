<?
	function get_all_dbs() {
		global $_connect;
		$result = array();
		$rsDB = $_connect->query("SHOW DATABASES");
		if ($rsDB->num_rows > 0) {
			$arDB = array();
			while ($arItem = $rsDB->fetch_row()) {
				$arDB[] = $arItem;
			}
			$result = $arDB;
		} else {
			$result = false;
		}
		return $result;
	}
	
	function is_in_array($arWhat, $arWhere, $r = false) {
		$result = false;
		foreach ($arWhere as $arItem) {
			if ($arWhat === $arItem) {
				$result = true;
			} elseif (($r == true) && (is_array($arItem) == true)) {
				$result = is_in_array($arWhat, $arItem, true);
			}
		}
		return $result;
	}
?>