<?	
	$query = "SHOW DATABASES";
	$arDB = get_all_dbs();
	?>
		New database
		<input id="new_db_name" placeholder="Database name" />
		<button onclick="new_db_query()">
			Create DB	
		</button>
		<script>
			function new_db_query() {
				var nDataBase = document.getElementById('new_db_name');
				if (nDataBase.value == '') {
					alert('Enter new database name first');
					return false;
				} else {
					var link = '?view=table&db=' + nDataBase.value + '&action=adddb';
					location.href = link;
				}
			}
		</script>
		<table>
			<?foreach($arDB as $arItem):?>
				<tr>
					<td>
						<a href="?view=db&db=<?=$arItem[0]?>">
							<?=$arItem[0]?>
						</a>
					</td>
					<td>
						<a href="?view=db&db=<?=$arItem[0]?>">
							View
						</a>
						<a href="?view=table&db=<?=$arItem[0]?>&act=addtable">
							New table
						</a>
						<a href="#" onclick="if(confirm('You are going to drop the whole database! This will destroy all the data in it. Do you really want to?')) location.href='?view=db&db=<?=$arItem[0]?>&action=drop'">
							Drop
						</a>	
					</td>
				</tr>
			<?endforeach?>
		</table>
	<?
?>