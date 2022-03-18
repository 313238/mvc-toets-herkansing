<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
</head>
<body>
    <?php foreach($data['countries'] as $country): ?>
        <h1><?=$country->name?></h1> id: <?=$country->id?>
        <p><?=$country->capitalCity?></p>
        <p><?=$country->continent?></p>
        <p><?=$country->population?></p>
    <?php endforeach; ?>
</body>
</html>