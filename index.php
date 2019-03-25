<?php 

require 'vendor/autoload.php';

/*$user = new App\User;
var_dump($user);*/

$client = new \GuzzleHttp\Client([
    'verify'=>false
    ]);

$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

$users = json_decode($response->getBody());

$collection = new App\UsersCollection($users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($users as $user):?>

        <li><?php // $user['email']?></li>
        <li><?php // $user['address']['street'] . '  ' . $user['address']['suite'] . '  ' . $user['address']['city'] . ' ( ' . $user['address']['zipcode'].')'?></li>

        <?php endforeach;?>

    </ul>
</body>
</html>
