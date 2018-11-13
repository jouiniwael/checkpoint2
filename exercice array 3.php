
<html>
<head>
    <title>array</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container" >
<table border="1" class="tab-pane">
    <tr>
        <th>Lettre </th>
        <th>valeur</th>
    </tr>
    <?php
    $data = "je m'appelle jouiiinni waell goo my codee";
    foreach (count_chars($data, 1) as $i => $val) {
        //  echo "Il y a $val occurence(s) de \"" , chr($i) , "\" dans la phrase.\n";
        ?>
        <tr>
            <td><?php echo chr($i) ?></td>
            <td><?php echo $val ?></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>