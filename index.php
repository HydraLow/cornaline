<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jour = $_POST['jour'] ?? '';
    $mois = $_POST['mois'] ?? '';
    $annee = $_POST['annee'] ?? '';

    if (checkdate((int)$mois, (int)$jour, (int)$annee)) {
        $date_naissance = new DateTime("$annee-$mois-$jour");
        $aujourdhui = new DateTime();
        $age = $aujourdhui->diff($date_naissance)->y;

        if ($age >= 18) {
            header('Location: majeur.php');
            exit;
        } else {
            $message = "<p class='error'>Désolé, vous devez avoir au moins 18 ans. Vous avez $age ans.</p>";
        }
    } else {
        $message = "<p class='error'>Date invalide, veuillez réessayer.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cornaline</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="logo">
    <img src="Logo_Cornaline_sous_illustrator_fin.png" alt="Logo Cornaline">
  </div>

  <h1>BIENVENUE SUR LE SITE CORNALINE</h1>

  <h2>Quelle est votre date de naissance ?</h2>
  <p class="subtitle">Pour rentrer sur le site vous devez être majeur.</p>

  <form method="POST">
    <div class="form-container">
      <input type="text" name="jour" placeholder="Jour" class="input" required>
      <input type="text" name="mois" placeholder="Mois" class="input" required>
      <input type="text" name="annee" placeholder="Année" class="input" required>
    </div>

    <button type="submit" class="button">
      <span>Valider</span> ➔
    </button>
  </form>

  <?php if (!empty($message)) echo $message; ?>

  <footer>
    <a href="#">Plan du site</a>
    <a href="#">Mentions légales</a>
    <a href="#">Politique de protection des données personnelles</a>
    <a href="#">Paramètres de confidentialité</a>
  </footer>

</div>

</body>
</html>
