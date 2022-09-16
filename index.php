<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Современный тогызкумалак, тогыз кумалак, тогуз коргооль">
    <title>Modern Togyz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

<p class="text-center fs-2">Modern Togyz / Современный тогызкумалак</p>

<div class="container">
<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col" style="width:5%">#</th>
        <th scope="col" style="width:30%">Белые</th>
        <th scope="col" style="width:30%">Черные</th>
        <th scope="col" style="width:5%">Результат</th>
        <th scope="col" style="width:15%">Турнир</th>
        <th scope="col" style="width:5%">Дата</th>
        <th scope="col" style="width:10%">Город</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require 'connection.php';
    $stm = $pdo->query('SELECT * from games');
    $rows = $stm->fetchAll(PDO::FETCH_NUM);

    foreach ($rows as $row) {
        echo '<tr>';
        echo '<th scope="row"><a href="game.php?id=' . $row[0] . '">' . $row[0] . '.</a></th>';
        echo '<td>' . $row[1] . '</td>';
        echo '<td>' . $row[2] . '</td>';
        echo '<td>' . $row[3] . '</td>';
        echo '<td>' . $row[4] . '</td>';
        echo '<td>' . $row[5] . '</td>';
        echo '<td>' . $row[7] . '</td>';
        echo '</tr>';
    }
    
    $pdo = null;
    ?>

    </tbody>
</table>
</div>

</body>
</html>
