<?php
$presentTime  = new DateTime();
$destinationTime = new DateTime("2077-11-29 11:20");
$interval = $presentTime->diff($destinationTime);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>Jour</th>
        <th>Mois</th>
        <th>Année</th>
        <th>Heure</th>
        <th>Minute</th>
    </tr>
    <tr>
        <td><?= $presentTime->format('d') ?></td>
        <td><?= $presentTime->format('m') ?></td>
        <td><?= $presentTime->format('y') ?></td>
        <td><?= $presentTime->format('g')+1 ?></td>
        <td><?= $presentTime->format('i') ?></td>
    </tr>
    <tr>
        <td><?= $destinationTime->format('d') ?></td>
        <td><?= $destinationTime->format('m') ?></td>
        <td><?= $destinationTime->format('y') ?></td>
        <td><?= $destinationTime->format('g') ?></td>
        <td><?= $destinationTime->format('i') ?></td>
    </tr>
    <tr>
        <td><?= $interval->d ?></td>
        <td><?= $interval->m ?></td>
        <td><?= $interval->y ?> </td>
        <td><?= $interval->h ?></td>
        <td><?= $interval->i ?></td>
    </tr>
</table>
    
    <p>Il me reste <?= $interval->y ?> ans, <?= $interval->m ?> mois, <?= $interval->d ?> jours, <?= $interval->h ?> heures et <?= $interval->i ?> avant de fêter mes 100 ans... </p>



<?php 
?>
</body>
</html>