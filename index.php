<?php

require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avaleht</title>
</head>
<body>
    <ul>
    <?php foreach($aBooks as $book): ?>
        <li>
            <a href="book.php?id=<?php echo $book['id']; ?>">
                <?php echo $book['title']; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>