<?php

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=meat_yogurt', 'root', '');
} catch (PDOException $e) {
    // echo '<pre>';
    // print_r($e->getMessage());
    // echo '</pre>';
    echo '<p> whoops! something went wrong </p>';
    echo '<br>';
    echo '<a href="http://localhost/meat-yogurt/">Back to homepage </a>';
    exit;
}

print_r($db);

$customer = [
    'name' => isset ($_POST['name']) ? $_POST['name'] : NULL,
    'email' => isset ($_POST['email']) ? $_POST['email'] : NULL,
    'created_at' => Date("Y-m-d"),
];

echo '<pre>';
print_r($customer);
echo '</pre>';