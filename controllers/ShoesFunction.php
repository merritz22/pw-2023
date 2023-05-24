<?php

function getCheckoutShoes($db,$id)
{
    $req = $db->prepare("SELECT * FROM chaussures WHERE id = :id_shoe");
    $req->execute(['id_shoe'=>$id]);
    $shoe = $req->fetch();
    return $shoe;
}

function getAllTypeShoes($db,$id)
{
    $req = $db->prepare("SELECT * FROM chaussures WHERE id_categorie = :id_type");
    $req->execute(['id_type'=>$id]);
    $shoes = $req->fetchAll();
    return $shoes;
}

?>