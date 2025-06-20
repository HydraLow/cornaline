<?php
session_start();
require_once 'config.php';
require_once 'app/model/model.php';

$route = "accueil";

if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}

if (!isset($_SESSION['age_verified'])) {
    if ($route !== 'age-verification') {
        header('Location: ?route=age-verification');
        exit();
    }
}

switch ($route) {
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateAccueilPage();
        break;
    case 'boutique':
        require_once 'app/controller/boutique.controller.php';
        generateBoutiquePage();
        break;
    case 'produit':
        require_once 'app/controller/produit.controller.php';
        generateProduitPage();
        break;
    case 'equipe':
        require_once 'app/controller/equipe.controller.php';
        generateEquipePage();
        break;
    case 'brassage':
        require_once 'app/controller/brassage.controller.php';
        generateBrassagePage();
        break;
    case 'contact':
        require_once 'app/controller/contact.controller.php';
        generateContactPage();
        break;
    case 'age-verification':
        require_once 'app/controller/age.controller.php';
        generateAgePage();
        break;
    default:
        header('Location: ?route=error');
        exit();
}
