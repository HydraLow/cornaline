<?php

require_once 'app/controller/controller.php';
require_once 'app/model/produit.model.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */

function generateProduitPage()
{
    $data = [
        "bieres" => getBiereByGout($_GET['gout'] ?? 'blonde'),
        'css_file' => "../../../public/css/produit.css",
        'page_title' => "Cornaline - Produits",
        'view' => 'app/view/produit.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
