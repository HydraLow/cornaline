<?php
require_once 'app/controller/controller.php';
require_once 'app/model/equipe.model.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateEquipePage()
{
    $data = [
        "GB_members" => getAllGB(),
        "MMI_members" => getAllMMI(),
        'css_file' => "../../../public/css/equipe.css",
        'page_title' => "Cornaline - Notre equipe",
        'view' => 'app/view/equipe.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
