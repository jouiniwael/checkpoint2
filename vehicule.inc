<?php
abstract class vehicule
{
    private $marque;
    private $date_achat;
    private $prix_achat;
    private $prix_courant;
    private$type;
    private $vitesse;




    public function getVitesse()
    {
        return $this->vitesse;
    }




    public function getType()
    {
        return $this->type;
    }



    public function getMarque()
    {
        return $this->marque;
    }

    public function getDateachat()
    {

        return $this->date_achat;
    }


    public function getPrixachat()
    {
        return $this->prix_courant;
    }

    public function getPrixCourant()
    {
        return $this->prix_courant;

    }


    abstract function deplacement();



}

    class voiture extends vehicule
    {


        public function __construct($marque, $date_achat, $prix_achat, $prix_courant, $type)
        {
            $this->$marque=marque;
            $this->$date_achat=date_achat;
            $this->$prix_achat=prix_achat;
            $this->$prix_courant=prix_courant;
            $this->$type=type;

        }
        public function deplacement()
        {
            echo"la voiture de marque".$this->getMarque()."achetee en".$this->getDateachat()."est de prix".$this->getPrixachat()."roule a vitesse de".$this->getVitesse()." de type:".$this->getType();
        }
        public function taxevente(){


            echo" taxe remboursee est:".$this->getPrixachat()*5/100;


        }
    }


        class avion extends vehicule
        {

            public function __construct($marque, $date_achat, $prix_achat, $prix_courant, $type)
            {   $this->$marque=marque;
                $this->$date_achat=date_achat;
                $this->$prix_achat=prix_achat;
                $this->$prix_courant=prix_courant;
                $this->$type=type;

            }

            public function deplacement()
            {
                echo"l avion de marque".$this->getMarque()."achetee en".$this->getDateachat()."est de prix".$this->getPrixachat()."roule a vitesse de".$this->getVitesse().$this->getType();
            }


    }
    






















