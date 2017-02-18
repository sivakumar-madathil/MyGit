<?php
require 'vendor/autoload.php';

$id = new \MongoDB\BSON\ObjectID('586d918610fd0d12640983af');
//$timestamp = hexdec(substr($id, 0, 8));
$timestamp = $id->getTimestamp();
print date("Y-m-d h:i:s A", $timestamp);


?>