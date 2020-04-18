<?php
require_once("config.php");
	if(count($_POST)>0) {
		$sql = "INSERT INTO tbl_items (name, parent_id) VALUES ('" . $_POST["item_name"] . "','" . $_POST["item_id"] . "')";
		$res = mysqli_query($conn, $sql);
	}
?>