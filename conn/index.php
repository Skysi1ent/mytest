<?php
require_once("./conn.php");

$sql = "select * from work_check";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)) {
	var_dump($row);
}

?>