<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    $bool = true;
    $int= 5;
    $string= 'groupe';
    $float = 2.3;
    
    ?>
    <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
    </tr>
    <tr>
        <td>booléen</td>
        <td>boolean(bool)</td>
        <td><?php echo $bool ?></td>
    </tr>
    <tr>
        <td>nb deci.</td>
        <td>Float</td>
        <td><?php echo $float ?></td>
    </tr>
    <tr>
        <td>Nb entier</td>
        <td>integer(int)</td>
        <td><?php echo $int?></td>
    </tr>
    <tr>
        <td>Chaine caractère</td>
        <td>string</td>
        <td><?php echo $string ?></td>
    </tr>
    
</table>

</body>
</html>