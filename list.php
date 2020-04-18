<?php
require_once("config.php");
$parent_id = 0;
$itemList = "SELECT * FROM tbl_items ORDER BY id DESC";
$result = mysqli_query($conn,$itemList);

foreach($result as $row)
{
  $data = get_node_data($parent_id, $conn);
}
echo json_encode(array_values($data));

function get_node_data($parent_id, $conn)
{
  $query = "SELECT * FROM tbl_items WHERE parent_id = '".$parent_id."'";
  $result = mysqli_query($conn,$query);

  $output = array();
  foreach($result as $val)
  {
    $sub_array = array();
    $sub_array['id'] = $val['id'];
    $sub_array['pid'] = $val['parent_id'];
    $sub_array['text'] = $val['name'];
    $dataa = get_node_data($val['id'], $conn);
    $sub_array['nodes'] = array_values($dataa);
    $output[] = $sub_array;
  }
  return $output;
}

?>
