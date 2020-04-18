<?php
	require_once("config.php");
	if(count($_POST)>0) {
		$sql = "DELETE FROM tbl_items WHERE id = '".$_POST['id']."' OR parent_id = '".$_POST['id']."'";
		$res = mysqli_query($conn, $sql);
	}
	//DELETE FROM `tbl_items` WHERE id = 38 OR parent_id = 38

?>