<?php
  // include($_SERVER['DOCUMENT_ROOT'] . '/includes/include.php');

  session_start();
  $servername = 'dhesscom.ipowermysql.com';
  $server_username = 'username';
  $server_password = 'password';
  $db = 'pogousers';
  $conn = new mysqli($servername, $server_username, $server_password, $db);

  
?>
