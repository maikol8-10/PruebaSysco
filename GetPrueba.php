<?php
require './vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/orders/getOrders');
$body=$res->getBody();
$data= json_decode($body, TRUE);
print_r($data);

for ($i = 0; $i < count($data); $i++) {
    echo $data[$i]["user"]."<br>";
}
?>