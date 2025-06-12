<?php

require_once 'app/model/model.php';

function getBiereByGout(string $gout): ?array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM bieres WHERE gout = :gout");
    $stmt->bindValue(':gout', $gout);
    $stmt->execute();
    $biere = $stmt->fetchAll();
    return $biere;
}
