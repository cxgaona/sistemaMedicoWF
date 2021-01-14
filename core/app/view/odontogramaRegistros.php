<?php

$link = mysqli_connect("localhost","id15896132_smilemed");
mysqli_select_db($link, "bd_odontograma");
header('Content-Type: application/json');
$result = mysqli_query($link, "select * from persona where dni ='".$_POST['dni']."'" );
$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$json = json_encode($rows);
echo $json;
