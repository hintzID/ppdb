<?php

$conn = mysqli_connect('localhost', 'root', '', 'latihanphp');
mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT * FROM latihanphp1');
while($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
			
$json = json_encode($data);
echo $json;
?>