<?php

// define own skarabee credentials
//$username = 'Skarabeedemoweblink'; // required
//$password = 'skarabee'; // required 'BE0011336' 'test12'

$username = get_option('ska_username'); // required
$password = get_option('ska_password'); // required


// username and password are required
if (empty($username) || empty($password)) {
    echo 'Please define your username and password in ' . __DIR__ . '/credentials.php';
}
