<?php

require_once 'app/model/model.php';
/**
 * Récupère un utilisateur par son adresse e-mail
 *
 * @param string $email L'adresse e-mail de l'utilisateur
 * @return array|null Les informations de l'utilisateur ou null si non trouvé
 */

function getAllBieres(): ?array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM bieres");
    $stmt->execute();
    $bieres = $stmt->fetchAll();
    return $bieres;
}
