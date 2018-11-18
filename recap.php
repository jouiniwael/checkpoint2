

<?php
$cin = isset($_POST['cin']) ? $_POST['cin'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
$choix = isset($_POST['choix']) ? $_POST['choix'] : NULL;
$harissa = isset($_POST['harissa']) ? $_POST['harissa'] : NULL;
$salade = isset($_POST['salade']) ? $_POST['salade'] : NULL;
$mayo = isset($_POST['mayo']) ? $_POST['mayo'] : NULL;
$ketchup = isset($_POST['ketchup']) ? $_POST['ketchup'] : NULL;
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>recap</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container text-monospace  bg-light ">
<div class="col-md-12 border bg-info text-white text-uppercase" >
    <?php
    echo'nom:'.$nom;echo'<br><br>';
    echo'prenom'.$prenom;echo'<br><br>';
    echo'cin'.$cin;echo'<br><br>';


    echo' nombres de sandwich :'.$nombre; echo'<br><br>';
    echo ' choix :<br><br>';
    echo 'avec : ';
    echo $harissa;echo' ';
    echo $salade;echo' ';
    echo $mayo;echo' ';
    echo $ketchup;echo'<br><br>';
    echo 'adresse du client :' .$adresse.'<br><br>';
    $res=$nombre/10;
    $res1=(int)$res;
    $prix=($nombre*4)-($res1*4);
    echo' vous avez :'.$res1.'gratuit <br><br>';
    echo ' vous paierais seulement:'.$prix .'dt<br><br>';
    echo ' a bientot';
    ?>
</div>
</body>


</html>