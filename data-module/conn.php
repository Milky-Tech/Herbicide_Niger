<?php 

// $uid_= "root";
// $pwd_ = "";
// $db = "weedapp";
// $server = "localhost";

// $conn = mysqli_connect($server, $uid_, $pwd_, $db);

// if (!$conn) die("Database Error");
// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=weed_app', "root", "");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $herbicide = $pdo->prepare('SELECT * FROM weed_app');

// $pdo = new PDO('mysql:host=shareddb-z.hosting.stackcp.net;dbname=herbicidesData-3136358574', "MilkyTech", "'e\jK38!0|zn");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $herbicide = $pdo->prepare('SELECT * FROM weed_app');

// ?>
<?php 

$uid_= "MilkyTech";
$pwd_ = "'e\jK38!0|zn";
$db = "herbicidesData-3136358574";
$server = "shareddb-z.hosting.stackcp.net";

$conn = mysqli_connect($server, $uid_, $pwd_, $db);

if (!$conn) die("Database Error");
?>