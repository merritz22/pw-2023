<?php

function getCheckout($db,$id)
{
    $req = $db->prepare("SELECT COUNT(*) FROM paniers WHERE id_client = :id_user");
    $req->execute(['id_user'=>$id]);
    $panier = $req->fetchAll();
    return $panier;
}
?>