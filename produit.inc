
<?php














// Créer une classe Produit. Cette classe contient la désignation du produit, son prixHt et sa référence.
class ProduitPoly {
    protected $designation;
    protected $prixHt;
    protected $ref;

    public function __construct($designation, $prixHt, $ref)
    {
        $this->designation=$designation;
        $this->prixHt=$prixHt;
        $this->ref=$ref;
    }



    public function affiche()
    {
        echo "Designation : ".$this->designation."  et son prix". $this->prixHt. "  et sa reference : ". $this->ref ;
    }
}
?>
<?php
class ElectromenagerPoly extends ProduitPoly{
protected $consommation;
protected $taxeConsommation;

public function __construct($designation, $prixHt, $ref, $consommation)

{
parent ::__construct($designation, $prixHt, $ref);
$this->consommation=$consommation;
}

public function calculTaxeConsommation()
{
if($consommation<100)
{
$taxeConsommation=0;
}
elseif (($consommation>100) && ($consommation<300))
{
$taxeConsommation=$this->consommation * 10;
}
else
{
$taxeConsommation=$this->consommation * 35;
}

return $taxeConsommation;
}

public function calculPrix()
{
return $this->prixHt-$this->taxeConsommation;
}
}
?>
<?php
class Textile extends ProduitPoly{
protected $taille;
protected $couleur;
const  TVA = 18;

public function __construct($designation, $prixHt, $ref, $taille, $couleur)
{
parent::__construct($designation, $prixHt, $ref);
$this->taille=$taille;
$this->couleur=$couleur;

}

public function calculPrix()
{
return $this->prixHt-self::TVA;
}



}
?>

