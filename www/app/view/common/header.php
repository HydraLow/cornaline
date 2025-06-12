<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["page_title"]; ?></title>
    <link rel="stylesheet" href="../../public/css/header_footer.css">
    <link rel="stylesheet" href="<?php echo $data["css_file"]; ?>">
    <link rel="shortcut icon" href="../../../public/images/favicon.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <a href="?route=accueil"><img src="../public/images/logofin.png" alt="Cornaline Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="?route=boutique">Nos Bières</a></li>
                <li><a href="?route=brassage">Brassage</a></li>
                <li><a href="?route=equipe">Qui sommes nous ?</a></li>
                <li><a href="?route=contact">Contact</a></li>
            </ul>
        </nav>
    </header>