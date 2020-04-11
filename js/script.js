
$(document).ready(function(){
	fill_parent_items();
	fill_treeview();

	function fill_treeview()
	{
		$.ajax({
		url:"list.php",
		dataType:"json",
		success:function(data){
				$('#treeview').treeview({
					data:data
				});
			}
		})
	}

	function fill_parent_items()
	{
		$.ajax({
		url:'sub_items.php',
		success:function(data){
			$('#parent_item').html(data);
			}
		});
	}

	$('#treeview_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
		url:"add.php",
		method:"POST",
		data:$(this).serialize(),
		success:function(data){
			fill_treeview();
			fill_parent_items();
				$('#treeview_form')[0].reset();
				alert('New Item added successuly..!');
			}
		})
	});
});

