<?php
function produit(){
    $var=1;
    $nbre=func_num_args();
    $var2=func_get_args();
    $produit=1;
    for($i=1;$i<$nbre;$i++){
        if ($var2!=0)
            $produit*=$var2[$i];
    }
    echo $produit;
}
produit(1,5,6);


