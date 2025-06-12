<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateContactPage()
{
    $data = [
        "css_file" => 'public/css/contact.css',
        'page_title' => "Cornaline - Contact",
        'view' => 'app/view/contact.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
