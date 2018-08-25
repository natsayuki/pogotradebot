<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/include.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>POGO UNC Trade Database</h1>
    <?php
      $sql = 'SELECT * FROM users';
      $results = $conn->query($sql);
      while($rows = $results->fetch_assoc()){
        echo $rows['name'];
      }
      echo '^^ List of names ^^';
    ?>
  </body>
</html>
