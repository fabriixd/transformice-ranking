<?php
require_once('rankingconex.php');
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?php echo utf8_encode($server_name); ?> - <?php echo utf8_encode($text_1); ?></title>
    <link rel="shortcut icon" href="http://i.imgur.com/h9Du5IR.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css"> 
  </head>

  <body>
    <h1><span class="blue"></span><?php echo utf8_encode($server_name); ?><span class="blue"></span> <span class="yellow"><?php echo utf8_encode($text_1); ?></span></h1>
    <h2><?php echo utf8_encode($text_2); ?></h2>

<table class="container">
	<thead>
		<tr>
            <th><h1><?php echo utf8_encode($text_3); ?></h1></th>
			<th><h1><?php echo utf8_encode($text_4); ?></h1></th>
			<th><h1><?php echo utf8_encode($text_5); ?></h1></th>
			<th><h1><?php echo utf8_encode($text_6); ?></h1></th>
			<th><h1><?php echo utf8_encode($text_7); ?></h1></th>
			<th><h1><?php echo utf8_encode($text_8); ?></h1></th>
		</tr>
	</thead>
	<tbody>
	<?php
	 $connect_table = $connect->query("SELECT * FROM $table_users ORDER BY $column_first DESC LIMIT 200");
	 $rank = 0;
     foreach($connect_table as $player) {
     $rank++;
     $username = $player[$column_name];
     $first = number_format($player[$column_first], 0, ",",",");
     $cheese = number_format($player[$column_cheese], 0, ",",",");
     $total_saves = $player[$column_normal_saves] + $player[$column_hard_saves] + $player[$column_divine_saves];
     $saves = number_format($total_saves, 0, ",",",");
     $bootcamp = number_format($player[$column_bootcamp], 0, ",",",");
     echo "
     <tr>
            <td>#$rank</td>
			<td>$username</td>
			<td>$first</td>
			<td>$cheese</td>
			<td>$saves</td>
			<td>$bootcamp</td>
		</tr>
        ";


}

?>
	</tbody>
</table>
  </body>
</html>