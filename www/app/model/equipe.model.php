<?php

require_once 'app/model/model.php';

function getAllGB(): ?array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM membres WHERE role = 'Génie Biologique'");
    $stmt->execute();
    $members = $stmt->fetchAll();
    return $members;
}

function getAllMMI(): ?array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM membres WHERE role = 'MMI'");
    $stmt->execute();
    $members = $stmt->fetchAll();
    return $members;
}
