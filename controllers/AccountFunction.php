<?php




function getUser($db,string $email,string $password)
{
    $req = $db->prepare("SELECT * FROM compte WHERE email=:email AND password=:pass");
    $req->execute(['email'=>$email, 'pass'=>$password]);
    $user = $req->fetchAll();
    return $user;
}

?>