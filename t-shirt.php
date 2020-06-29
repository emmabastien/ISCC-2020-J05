<html> 
<head> 
<title>T-SHIRT PHP</title> 
</head> 
<body> 

<h3> 

<?php 

$nom_produit = "t-shirt simple\n";
  echo $nom_produit;

$couleur = "blanc\n"; 
  echo $couleur;

$prix = "10.50\n";
  echo $prix;

$disponible = "true\n";
  echo $disponible;

$quantite = "10\n";
  echo $quantite;


echo "Le nom du produit est ", $nom_produit,".";

echo "Il reste ", $quantite, " produit en stock. ";

echo "Le produit ", $nom_produit, " est de couleur ", $couleur,".";

?> 

</h3>



<h4> 

<?php 

$quantite = 10;
$prix = 10.50;

echo "Acheter 3 produits couterait ", ($prix * 3), ". ";

echo "Acheter la totalité des produits disponibles coûterait ", ($quantite * $prix),". ";

echo "Si 3 produits sont vendus, il reste ", ($quantite - 3), " en stock.";

?>

</h4>



<p> 

<?php 

if ($disponible = true)
 echo "Le produit ", $nom_produit, "est disponible en ligne.";

if ($disponible = false)
echo "Le produit ", $nom_produit, "n'est malheuresement plus disponible."

?> 

</p>



<p> 

<?php 

$quantite = 10;  

if ($quantite > 5)
echo "Il reste  ", ($quantite), " produits en magasin.";

if ($quantite < 5)
echo "Il ne reste plus que ", $quantite, " produits en magasin.";

if ($quantite < 1)
echo "Il ne reste qu'un produit en magasin.";

if ($quantite = 0)
echo "Il ne reste plus de produit en magasin.";

?>

</p>


</body> 
</html> 