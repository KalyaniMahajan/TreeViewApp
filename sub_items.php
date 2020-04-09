<?php
	require_once("config.php");
	$query = "SELECT * FROM tbl_items ORDER BY name ASC";
	$result = mysqli_query($conn, $query);
	$output = '<option value="0">Parent Item</option>';

	foreach($result as $row)
	{
	 	$output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
	}
	echo $output;
?>