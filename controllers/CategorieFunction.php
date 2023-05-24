<?php

function getShoeType($db,$id)
{
    $req = $db->prepare("SELECT * FROM categorie WHERE id = :id_cat");
    $req->execute(['id_cat'=>$id]);
    $shoe = $req->fetch();
    return $shoe;
}
?>