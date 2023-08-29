<?php

$vegetables = [
    ['name' => "Rote Bete", 'price' => rand(1, 4)],
    ['name' => "Karotte", 'price' => rand(1, 3)],
    ['name' => "Zwiebel", 'price' => rand(1, 4)],
    ['name' => "Gurke", 'price' => rand(1, 2)],
    ['name' => "Tomate", 'price' => rand(1, 5)],
    ['name' => "Dill", 'price' => rand(1, 2)],
    ['name' => "Sauerampfer", 'price' => rand(1, 8)],
];


$username = 'root';
        $password = 'root';
        $db = 'pdo_exemple';
        $host = '127.0.0.1';

        $dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8;';

        $database = new PDO($dsn, $username, $password);

        
        function dd($data)
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }

foreach ($vegetables as $item) {
    
    $sql = "INSERT INTO `products` (`name`, `price`, `category_id`) VALUES ('{$item["name"]}', '{$item["price"]}', 3)";
    
    // $database->query($sql);
}