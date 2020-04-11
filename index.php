<!DOCTYPE html>
<html>
	<head>
		<title>Treeview Application</title>
		<!-- Added some libraries -->
		<script src="js/jquery.min.js"></script>    
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" charset="utf8" src="js/bootstrap-treeview.js"></script>
		<link rel="stylesheet" href="css/bootstrap-treeview.min.css" />
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="container" style="width:900px;">
			<h2 align="center">TreeView Application</h2>
			<br/><br/>
				<div class="row">
					<div class="col-md-6">
					<h3 align="center"><u>Add New Item</u></h3>
					<br />
					<!-- Create Itm Form -->
						<form method="post" id="treeview_form">
							<div class="form-group">
								<label>Select Parent Item</label>
									<select name="item_id" id="parent_item" class="form-control" required="">
									</select>
							</div>
							<div class="form-group">
								<label>Enter Item Name</label>
								<input type="text" name="item_name" value="" id="item_name" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="action" id="action" value="Add" class="btn btn-info" />
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<h3 align="center"><u>View in Tree Structure</u></h3>
						<br />

					<!-- For tree structure -->	
					<div id="treeview"></div>
				</div>
			</div>
		</div>
	</body>
</html>