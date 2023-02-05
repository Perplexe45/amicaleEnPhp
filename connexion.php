<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=amicaleduliege;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('Erreur de connection à la base de données : '.$e->getMessage());
    }
;