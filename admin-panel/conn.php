<?php 

$uid_= "MilkyTech";
$pwd_ = "nFg4w+(wv%i3";
$db = "herbicidesData-3136358574";
$server = "shareddb-z.hosting.stackcp.net";

$conn = mysqli_connect($server, $uid_, $pwd_, $db);

if (!$conn) die("Database Error");