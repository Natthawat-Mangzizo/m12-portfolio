<?php
// ดึงค่า name จาก GET หรือ POST
$name = $_REQUEST['name'] ?? 'Guest';
$method = $_SERVER['REQUEST_METHOD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Received Data</title>
</head>
<body>
    <h1>Received via <?= $method ?></h1>
    <p>Hello, <strong><?= htmlspecialchars($name) ?></strong>!</p>
</body>
</html>