<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: candidature.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information du candidat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Information du candidat</h2>
    <table class="table table-bordered">
        <tr class="table-danger">
            <th>Nom du champ de saisie</th>
            <th>Valeur de la saisie</th>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?= $_SESSION["nom"] ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?= $_SESSION["prenom"] ?></td>
        </tr>
        <tr>
            <td>Login</td>
            <td><?= $_SESSION["login"] ?></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td>********</td>
        </tr>
        <tr>
            <td>Lettre de motivation</td>
            <td><?= nl2br($_SESSION["motivation"]) ?></td>
        </tr>
        <tr>
            <td>CV</td>
            <td><a href="<?= $_SESSION["cv_path"] ?>" target="_blank"><?= basename($_SESSION["cv_path"]) ?></a></td>
        </tr>
    </table>

    <a href="candidature.php" class="btn btn-success">Retour</a>
</div>

</body>
</html>
