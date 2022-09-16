<?php
  require 'connection.php';

  $id = intval($_GET['id']);

  $stm = $pdo->query('SELECT * from games WHERE `id` = ' . $id);
  $rows = $stm->fetchAll(PDO::FETCH_NUM);

  foreach ($rows as $row) {
      echo $row[1] . ' - ' . $row[2] . ' ' . $row[3] . '<br><br>'
          . str_replace(PHP_EOL, '<br>', $row[8]) . '<br><br>';
  }

  $pdo = null;
