<?php
/**
 * Created by PhpStorm.
 * User: waeel
 * Date: 05/12/2018
 * Time: 00:37
 */

class utilisateur
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
    public function setCin($cin): void
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
    public function setNom($nom): void
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
    public function setPrenom($prenom): void
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
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }
    public function selectAll($c)
    {
        $cin = isset($_POST['cin']) ? $_POST['cin'] : NULL;
        $req = "select *from utilisateur WHERE cin LIKE '%" . $cin . "%'";
        $rep = $c->query($req);
        if ($rep) {
            echo '<span class="bg-success"> all is ok</span> <br>';
        } else {
            echo ' query failed';
        }
        $users = $rep->fetchAll(PDO::FETCH_OBJ);
        return $users;
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
    public function delete($cnx)
    {
        $requete = "DELETE FROM  utilisateur WHERE cin= :cin";
        $conx = $cnx->prepare($requete);
        $conx->bindParam(':cin', $_GET['cin'], PDO::PARAM_INT);
        $conx->execute();
        $reponse = $cnx->query($requete);
        var_dump($reponse);
        echo '<br>';
        if ($reponse) {
            echo ' delete is ok <br>';
        } else
            echo 'delete failed <br>';
        $conexion = null;
    }
    public function upDate($cnx, $adresse, $prenom, $nom, $cin)
    {
        $requete = "UPDATE  utilisateur SET adresse='$adresse',prenom='$prenom',nom='$nom', cin= $cin where cin= $cin";
//        $conx = $cnx->prepare($requete);
//        $conx->bindParam(':adresse', $_GET['adresse'], ':prenom', $_GET['prenom'], ':nom', $_GET['nom'], ':cin', $_GET['cin'], PDO::PARAM_INT);
//        $conx->execute();
        $reponse = $cnx->query($requete);
        echo '<br>';
        if ($reponse) {
            echo ' update  is ok <br>';
        } else
            echo 'update failed <br>';
        $conexion = null;

}}
?>