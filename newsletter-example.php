<?php 

echo '<h1>hello from php land</h1>';

echo '<pre>';
print_r($_GET);
echo isset($_GET['name']) ? $_GET['name'] : NULL;
echo '</pre>';

echo '<pre>';
print_r($_POST);
echo isset($_POST['name']) ? $_POST['name'] : NULL;
echo '</pre>';
