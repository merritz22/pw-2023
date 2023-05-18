<?php
function connection(){
    //on utilise une variables pour lire le fichier de connection a la base de donnees
    //ce fichier contient les informations neccessaires pour addresser la base de donnees
    $_SETTINGS = parse_ini_file('./../settings.ini', true);


    //on utilises PDO pour creer une instance de connection a la base de donnees, les informations sont lus 
    // dans le tableau $_SETTINGS.
    $db = new \PDO(
        "mysql:hostname={$_SETTINGS['db']['host']};dbname={$_SETTINGS['db']['name']}",
        $_SETTINGS['db']['user'],
        $_SETTINGS['db']['pass'],
        [
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        ]
    );

    // on retourne l'instance de la base de donnees en cas de succes et une Exception en cas d'erreur
    if ($db != null)
        return $db;
    else
        throw new PDOException('impossible de se connecter a votre base de donnees\n');
}

?>