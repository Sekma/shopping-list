<?php
$courses = array(
    "fruitEtLegumes" => array(
                     "pommes",
                     "carottes",
                     "fraises",
                     "radis",
                     "melons",
                     "tomates"
    ),
    "epicerie"      => array(
                "pates",
                "sauceRoquefort",
                "vinaigre",
                "huile", 
                "sucre"

    ),
    "frais"         => [
                "yaourtAuxFruits",
                "cremeDessert", 
                "beurre"
    ],
    "petitDejeuner" => array(
                    "gateaux",
                    "nuttela", 
                    "cereales"
    ) 
);
ksort($courses); //trier les rayons en ordre

sort($courses["fruitEtLegumes"]); //trier les produits en ordre
sort($courses["epicerie"]); //trier les produits en ordre
sort($courses["frais"]); //trier les produits en ordre
sort($courses["petitDejeuner"]); //trier les produits en ordre

array_shift($courses["fruitEtLegumes"]); //suprimer les carottes

array_pop($courses["petitDejeuner"]); //suprimer la nutella

$courses["boulangerie"][0]="pain"; //ajouter du pain

ksort($courses); //trier les rayons en ordre après l'ajout du rayon boulangerie

echo '<pre>';
print_r($courses);
echo '</pre>';