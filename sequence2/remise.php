<?php

echo "Saisir le prix de l'article (ex : 5) : ";
$prix = readline(" ");

if ($prix<1000){

    $remise = ($prix*0.05);
    $nf = number_format($remise, 2, ',', '');
    echo "La remise est de 5% soit \x1b[41m$nf\033[0m euros sur le prix de l'article";

    echo PHP_EOL;

    $total = $prix - $remise;
    $nf = number_format($total, 2, ',', '');
    echo "Le montant de l'article après remise est de \x1b[41m$nf\033[0m euros";


}elseif($prix>=1000 && $prix<=5000){

    $remise = $prix*0.10;
    $nf = number_format($remise, 2, ',', '');
    echo "La remise est de 10% soit \x1b[41m$nf\033[0m euros sur le prix de l'article";

    echo PHP_EOL;

    $total = $prix - $remise;
    $nf = number_format($total, 2, ',', '');
    echo "Le montant de l'article après remise est de \x1b[41m$nf\033[0m euros";


}else{
    $remise = $prix*0.20;
    $nf = number_format($remise, 2, ',', '');
    echo "La remise est de 20% soit \x1b[41m$nf\033[0m euros sur le prix de l'article";

    echo PHP_EOL;

    $total = $prix - $remise;
    $nf = number_format($total, 2, ',', '');
    echo "Le montant de l'article après remise est de \x1b[41m$nf\033[0m euros";
}
