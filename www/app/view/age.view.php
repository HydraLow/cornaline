<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'age</title>
    <link rel="stylesheet" href="../../public/css/age.css">
    <link rel="icon" href="../../public/images/logofin.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img
                src="../../public/images/logo.png"
                alt="Logo Cornaline" />
        </div>

        <h1>BIENVENUE SUR LE SITE CORNALINE</h1>

        <h2>Quelle est votre date de naissance ?</h2>
        <p class="subtitle">Pour rentrer sur le site vous devez être majeur.</p>

        <form class="form-container" action="/?route=age-verification" method="POST">
            <div>
                <input type="text" name="day" placeholder="Jour" class="input" />
                <input type="text" name="month" placeholder="Mois" class="input" />
                <input type="text" name="year" placeholder="Année" class="input" />
            </div>
            <button class="button"><span>Valider</span> ➔</button>
        </form>

</body>

</html>