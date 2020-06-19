<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://amazon-data.p.rapidapi.com/asin.php');
$request->setRequestMethod('GET');
$request->setQuery(new http\QueryString(array(
	'region' => 'us',
	'asin' => 'B07FZ8S74R'
)));

$request->setHeaders(array(
	'x-rapidapi-host' => 'amazon-data.p.rapidapi.com',
	'x-rapidapi-key' => 'ef9beacf02msh62209c55f7c13d8p1c9328jsn82964489b055'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();