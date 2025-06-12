<?php

require_once 'app/controller/controller.php';

/**
 * Controller en charge de la génération de la page Vérification d'âge
 *
 * @return void
 */
function generateAgePage()
{

    if (!isset($_SESSION['age_verified'])) {
        if (isset($_POST['day'], $_POST['month'], $_POST['year'])) {
            $annee = (int)$_POST['year'];

            if ($annee <= 2007) {
                $_SESSION['age_verified'] = true;
                header('Location: ?route=accueil');
                exit();
            }
        }
    } else {
        header('Location: ?route=accueil');
        exit();
    }

    $data = [
        'active_route' => 'age-verification',
        'css_file' => "../../../public/css/age.css",
        'page_title' => "Cornaline - Vérification d'âge",
        'view' => 'app/view/age.view.php',
        'layout' => 'app/view/common/age.layout.php',
    ];

    generatePage($data);
}
