<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $postnom = $_POST['postnom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $date_naissance = $_POST['date_naissance'] ?? '';
    $annee = $_POST['annee'] ?? '';

    if ($nom && $postnom && $prenom && $date_naissance && $annee) {
        try {
            $pdo = new PDO("sqlite:etudiants.db");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE TABLE IF NOT EXISTS etudiants (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nom TEXT NOT NULL,
                postnom TEXT NOT NULL,
                prenom TEXT NOT NULL,
                date_naissance TEXT NOT NULL,
                annee TEXT NOT NULL
            )";
            $pdo->exec($sql);

            $stmt = $pdo->prepare("INSERT INTO etudiants (nom, postnom, prenom, date_naissance, annee) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $postnom, $prenom, $date_naissance, $annee]);

            echo "Étudiant enregistré avec succès.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
