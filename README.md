# Polyline Encoder

Polyline Encoder is a simple PHP class that will help you work with polyline encoding / decoding.
For more details about the polyline encoder algorithm, please refer to : https://developers.google.com/maps/documentation/utilities/polylinealgorithm

## License

This project is under MIT and GPLv2 Licenses.

## Usage

Just insert the following line at the top of your PHP file :

```php
#require_once 'PolylineEncoder.php';
```

### Encode a polyline

To encode a polyline just follow those steps :

```php
$polylineEncoder = new PolylineEncoder();

$polylineEncoder->addPoint(30.5,-120.2);
$polylineEncoder->addPoint(40.7,-120.95);
$polylineEncoder->addPoint(43.252,-126.453);

$encodedString = $polylineEncoder->encodedString();
```

### Decode a polyline

```php
$decodedPoints = PolylineEncoder::decodeValue("_p~iF~ps|U_ulLnnqC_mqNvxq`@");
```

### Note

Please note that the encoding levels are currently not supported.
