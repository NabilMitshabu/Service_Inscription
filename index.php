<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="ajouter_etudiant.php" method="post">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br>

        <label>Postnom :</label><br>
        <input type="text" name="postnom" required><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" required><br>

        <label>Date de naissance :</label><br>
        <input type="date" name="date_naissance" required><br>

        <label>Année :</label><br>
        <input type="text" name="annee" required><br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
