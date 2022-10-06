<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=weed_app', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$herbicide = $pdo->prepare('SELECT * FROM products');

// $pdo = new PDO('mysql:host=shareddb-z.hosting.stackcp.net;dbname=herbicidesData-3136358574', "MilkyTech", "'e\jK38!0|zn");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $herbicide = $pdo->prepare('SELECT * FROM products');


?>