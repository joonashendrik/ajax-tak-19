<?php

require_once 'connect.php'

$stmt = $pdo->prepare("SELECT * FROM books");
$stmt-> execute();
$abooks-> fetchall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
    <table>
  <tr>
    <th>aasta</th>
    <th>kirjeldus</th>
    <th>hind</th>
  </tr>
  <tr>
    <td>2004</td>
    <td>testestestestest</td>
    <td>300</td>
  </tr>
</table>
    <?php
    foreach($abooks as $book){
    echo "<li>" . $book["title"];

?>
</body>
</html>
