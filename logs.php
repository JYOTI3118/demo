<?php

$con = mysqli_connect('localhost','fred','zap');
mysqli_select_db($con,'login');

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}