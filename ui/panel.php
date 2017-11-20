<div id="header_panel">
	<span class="delimeter"></span>
	<span><?=$_SESSION["USER_NAME"]?>@<?=$_SESSION["DB_SERVER"]?></span>
	<a href="?logout">
		Sign out
	</a>
	<span class="delimeter"></span>
	<a href="?view=db"<?if($_GET["view"]=="db"):?> class="active"<?endif?>>
		Databases
	</a>
	<a href="?view=prefs"<?if($_GET["view"]=="prefs"):?> class="active"<?endif?>>
		Preferences
	</a>
	<a href="?view=settings"<?if($_GET["view"]=="settings"):?> class="active"<?endif?>>
		Settings
	</a>
</div>