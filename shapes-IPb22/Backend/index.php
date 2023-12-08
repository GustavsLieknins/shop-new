<?php
header("Access-Control-Allow-Origin: *");
include "Rectangle.php";
include "Circle.php";


$Rectangle1 = New Rectangle("red", 420, 69);
$CirleK = New Circle("Blue", 420, 69, 11);
echo json_encode([$Rectangle1, $CirleK]);
// echo json_encode($CirleK);