<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=text] {
            width: 100%;
            padding: 12px ;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        fieldset{
            padding: 14px;
        }
        #aff{
            margin-right:6%;

        }
    </style>
</head>
<body>
    <form method="post" action="ajouter.php">
        <fieldset>
            <legend>Enregistrement des participants</legend>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br/>

        <label for="tel"> Numéro de Téléphone :</label>
        <input type="text" id="tel" name="tel" required>
        <label for="email"> Adressse email :</label>
        <input type="text" id="email" name="email" required>

         <input type="submit" name="Enregistrer" value="Enregistrer"><br/>
   
         <input type="submit" id="aff"  name="Afficher"   value="Afficher la liste">
   
      </fieldset>
    </form>
    



</body>
</html>

