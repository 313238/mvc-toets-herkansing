<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
</head>
<body>
<h1>De 5 snelste achtbanen van de wereld.</h1>
  <table>
      <thead>
    <th>id</th>
    <th>Achtbaan</th>
    <th>Pretpark</th>
    <th>Land</th>
    <th>Snelheid</th>
    <th>Hoogte</th>
    </thead>
     <?= $data["rollercoasters"]; ?></table>
   
</body>
</html>