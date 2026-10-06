<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h3>Página Principal</h3>
  <p>Dato obtenido: <?php print_r($data); ?></p>
  <P>Títuloa página: <?= $data['page_title'] ?></P><br>
  <p>
    <?php
      //Forma 1
      // print_r("<pre>");
      // print_r($data);
      // print_r("</pre>");
      //Forma 6
      //dep($data['datosPersonales']);
      //Forma 7
      dep($data);
    ?>
  </p>
</body>
</html>