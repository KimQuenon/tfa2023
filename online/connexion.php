<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=quki3260_arena;charset=utf8','quki3260_','epse856g3',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
?>