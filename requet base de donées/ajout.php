
<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 22/11/2018
 * Time: 20:07
 */
class Utilisateur
{
    protected $cin;
    protected $nom;
    protected $prenom;
    protected $adresse;

    public function __utilisateur($cin, $nom, $prenom, $adresse)
    {
        $this->setCin($cin);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAdresse($adresse);
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function addUser($cnx)
    {
        $cin = isset($_POST['cin']) ? $_POST['cin'] : NULL;
        $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
        $adresse = isset($_POST['adresse']) ? $_POST['nom'] : NULL;
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
        $requete = "INSERT INTO utilisateur (adresse,prenom,nom,cin) VALUES ('$adresse','$prenom','$nom',$cin)";
        $reponse = $cnx->query($requete);
        if ($reponse) {
            echo ' <span class="bg-success">insert is ok</span>  <br>';
        } else
            echo '<span class="bg-danger">insert failed</span> <br>';
    }
}
    ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
<p class="text-light">retour <a href="main.html"> <span class="glyphicon glyphicon-share-alt"></span></a></p>
</body>
</html>

