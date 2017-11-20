<?	
	$query = "SHOW DATABASES";
	$arDB = array();
	$rsDB = $_connect->query($query);
	while ($db = $rsDB->fetch_row()) {
		$arDB[] = $db;
	}
	?>
		New table
		<input id="new_table_name" />
		<button onclick="new_table_query()">
			Create table	
		</button>
		<script>
			function new_table_query() {
				
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
						<a href="?view=table&db=<?=$arItem[0]?>">
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