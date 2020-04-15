<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="trombinoscope.css" />
    <title>Trombinoscope</title>
</head>

<body>
    <h1>Trombinoscope de la best Promo</h1>


<form action="trombinoscope.php" method="post">    

<label for="lefiltre"> Filtre : </label>
<p><input type="text" name="filtre"/></p> 
<p><input type="submit" value="OK"/></p>  
</form>
<br>

<div class="decors">
<?php

$Promo =[
[
    "Prenom"=>"sandrine", 
    "Nom"=>"Da Silva", 
    "Image"=> "https://pokemonletsgo.pokemon.com/assets/img/common/char-eevee.png"
],

[
    "Prenom" => "Emilie", 
    "Nom"=>"Pomies", 
    "Image"=>"https://i.pinimg.com/564x/0a/51/b2/0a51b288935292a4e05c140bae30b023.jpg"
],

[
    "Prenom"=>"Aurore", 
    "Nom"=>"Leban", 
    "Image"=>"https://i.pinimg.com/236x/8b/d8/d1/8bd8d1bc32f9adf60d081eaa3c0db21a.jpg"
],

[
    "Prenom"=>"Drisse",
    "Nom"=> "Goncalves",
    "Image"=>"https://www.pokepedia.fr/images/thumb/b/b6/Luxio-DP.png/250px-Luxio-DP.png"
],

[
    "Prenom"=>"JP",
    "Nom"=>"Andrei",
    "Image"=>"https://www.pokebip.com/pokedex-images/artworks/439.png"
],
[
    "Prenom"=>"JEFF",
    "Nom"=>"Bouchet",
    "Image"=>"https://www.pokebip.com/pokedex-images/artworks/185.png" 

] 
]; 

$error = true;
function recherche($pPromo)
{
    // pour chaque eleve
    for ($i = 0; $i < count($pPromo); $i++) 
    {
        if(!empty($_POST) && isset($_POST["filtre"]) && !empty($_POST["filtre"]))
        {
            // si le prenom contient le filtre ou le nom
            if(stripos($pPromo[$i]["Prenom"], $_POST["filtre"])!== false)
            {
                affichage($pPromo[$i]);
            }
        }
        else
        {
            affichage($pPromo[$i]);
            
        }
    }  
}

function affichage($pEleve)
{
      echo "<tr>
                    <td>".$pEleve['Prenom']."</td>
                    <td>".$pEleve['Nom']."</td>
                    <td><img src= ".$pEleve['Image']."></td>
                    
                </tr>";
}


echo "<table border = 1>
    <tr>
      <td>Nom</td>
      <td>Prénom</td>
      <td>Image</td>
    </tr>";

    recherche($Promo);

echo "</table>";

?>
</div>
</body>
</html>