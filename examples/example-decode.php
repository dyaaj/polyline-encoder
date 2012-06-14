<?php

require_once '../PolylineEncoder.php';

$stringToDecode = "_p~iF~ps|U_ulLnnqC_mqNvxq`@";

echo "String to decode :\t$stringToDecode\n";

$decodedPoints = PolylineEncoder::decodeValue($stringToDecode);

print_r($decodedPoints);
