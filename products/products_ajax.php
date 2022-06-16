<?php
include '../inc/config.php';

$sql = "SELECT * from products";
$result = mysqli_query($mysqli,$sql);
$l= [];

while($row = mysqli_fetch_array($result)){
	$l[] = $row;
}
echo json_encode($l);

?>