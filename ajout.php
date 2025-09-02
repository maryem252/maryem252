<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nom']) && !empty($_POST['email']) && isset($_POST['solde'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $solde = floatval($_POST['solde']);
    $date_ajout = date("Y-m-d H:i:s");

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, solde, date_ajout) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $solde, $date_ajout]);

    echo "✅ Utilisateur ajouté avec succès : $nom";
} else {
    echo "⚠️ Données manquantes.";
}
