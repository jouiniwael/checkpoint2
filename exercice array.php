<html>
<head>
    <title>array</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">
<div class="row">

    <div class="col-md-4">
        <h3>tableau d’entiers variant de 1 à 63</h3>
        <br>
        <table class="table-success">
            <tr>
                <th>key</th>
                <th>val</th>
            </tr>
            <?php
            $array = array();
            for ($i = 0; $i < 63; $i++) {
                $array[] = rand(1, 63);
                foreach ($array as $key => $val)
                    ?>
                    <tr>
                    <td><?php echo $key ?></td>
                <td><?php echo $val ?></td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
    <div class="col-md-4">
        <h3>tableau de nombres variant de 0 à 6.3</h3>
        <br>
        <table class="table-primary">
            <tr>
                <th>key</th>
                <th>val/10</th>
            </tr>
            <?php
            $array1 = array();
            foreach ($array as $item) {
                $array1[] = $item / 10;
                foreach ($array1 as $key => $val)
                    ?>
                    <tr>
                    <td><?php echo $key ?></td>
                <td><?php echo $val ?></td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
    <div class="col-md-4" border="3">
        <h3>tableau associatif dont les clés X varient de 0 à 6.3 et dont les valeurs sont sin(X)</h3>
        <table class="table-dark">
            <tr>
                <th>key</th>
                <th>sin(key)</th>
            </tr>
            <?php
            foreach ($array1 as $val) {
                $key1 = strval($val);
                $array2 = array($key1 => sin($val));
                // var_dump($array2);
                foreach ($array2 as $key => $val)
                    ?>
                    <tr>
                    <td><?php echo $key ?></td>
                <td><?php echo $val ?></td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>