<?php

require_once('connection.php');
$sql = "SELECT * FROM upazila";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $rows[] = $row;
}
 json_encode($rows)
?>

