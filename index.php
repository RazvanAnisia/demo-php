<?php
require 'vendor/autoload.php';
class Ship {
    public $name;
    public function randNumber() {
        $number = random_int(0, 100);
        return $number;
    }
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';

echo $myShip->name;
echo '<br>';

//$results = file_get_contents('https://jsonplaceholder.typicode.com/todos/1');
//echo $results;

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/'.$myShip->randNumber());

echo $response->getStatusCode(); # 200
echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
echo $response->getBody(); 

echo $myShip->randNumber();

?>

