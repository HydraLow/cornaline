<?php
// Redirection automatique vers la page d'accueil
header('Location: accueil.php');
exit;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cornaline — Accès autorisé</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="logo">
    <img src="logo-cornaline.png" alt="Logo Cornaline">
  </div>

  <h1>Bienvenue, vous êtes majeur !</h1>
  <p class="subtitle">Vous avez maintenant accès au contenu réservé aux adultes.</p>

  <a href="index.php" class="button">Retour à l'accueil</a>

  <footer>
    <a href="#">Plan du site</a>
    <a href="#">Mentions légales</a>
    <a href="#">Politique de protection des données personnelles</a>
    <a href="#">Paramètres de confidentialité</a>
  </footer>

</div>

</body>
</html>
