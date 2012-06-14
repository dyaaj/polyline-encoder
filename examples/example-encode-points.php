<?php

require_once '../PolylineEncoder.php';

$pointsToEncode = array(
    array('x' => 38.5, 'y' => -120.2),
    array('x' => 40.7, 'y' => -120.95),
    array('x' => 43.252, 'y' => -126.453)
);

echo "Points to encode : \n";
print_r($pointsToEncode);

$polylineEncoder = new PolylineEncoder();

foreach ($pointsToEncode as $point) {
    $polylineEncoder->addPoint($point['x'], $point['y']);
}

$encodedString = $polylineEncoder->encodedString();
echo "Encoded string is :\t$encodedString\n";