<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="fiche.css" type="text/css"/>
    <style>
         table {
        width: 600px;
        margin: 14px;
        border-collapse: collapse;
    }
    table td, th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    table th {
        background-color: #337ab7;
        color: #fff;
    }
        </style>
</head>
<body>
    
<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$database = "liste_participant";

$connexion = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
    exit();
}

// Récupération des données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$email = $_POST["email"];

// Insertion des données dans la base de données
if (isset($_POST["Enregistrer"])){

   $select= mysqli_query($connexion, "SELECT * FROM participant WHERE  EmailPart='".$email."'" ) ;
   if (mysqli_num_rows($select)){
    exit('ce email exite deja ');
   }
else { $sql = "INSERT INTO participant (NomPart, PrenomPart, TelPart, EmailPart) VALUES ('$nom', '$prenom', $tel, '$email')";
$resultat = mysqli_query($connexion, $sql);

if(isset($resultat))  {
    echo "Le participant a été ajouté avec succès.";
} else{
    echo "Echec de l'ajout.";
}
}
    
header('Location: Untitled-1.php');
}

elseif(isset($_POST['Afficher'])){
echo('<h1>La liste des participants </h1>');

echo "<table>
        <thead>
            <tr>
                <th>identifiant</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Numéro de téléphone</th>
                <th>Email</th>
            </tr>
        </thead>";


// Requête SQL pour récupérer les informations des élèves
$sql = "SELECT * FROM participant";
$resultat = mysqli_query($connexion, $sql);

// Vérification du résultat de la requête



if ( mysqli_num_rows($resultat) > 0 ){
    // Affichage de la liste des élèves
   
    while ($row = mysqli_fetch_assoc($resultat)) {
      
      //  echo '<pre>';
       // print_r($row);
       // echo '</pre>';
       echo '<tr>';
       echo '<td>'.$row['IdPart'].'</td>';
       echo '<td>'.$row['NomPart'].'</td>';
       echo '<td>'.$row['PrenomPart'].'</td>';
       echo '<td>'.$row['TelPart'].'</td>';
       echo '<td>'.$row['EmailPart'].'</td>';
       echo '</tr>';
      
    }
  echo'  </table>';
} else {
    echo "Aucun élève enregistré dans la base de données.";
}


// Fermeture de la connexion à la base de données
mysqli_close($connexion);
}

?>
</body>
</html>
