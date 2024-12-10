<?php

require 'DBModel.php';
require 'FormModel.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['nom']) && isset($_POST['editeur']) && isset($_POST['date_sortie']) && isset($_POST['plateforme']) && isset($_POST['description']) && isset($_POST['image_url']) && isset($_POST['site_url'])){
        $nom = htmlspecialchars($_POST['nom']);
        $editeur = htmlspecialchars($_POST['editeur']);
        $date_sortie = htmlspecialchars($_POST['date_sortie']);
        $plateforme = htmlspecialchars($_POST['plateforme']);
        $description = htmlspecialchars($_POST['description']);
        $image_url = htmlspecialchars($_POST['image_url']);
        $site_url = htmlspecialchars($_POST['site_url']);
        echo $nom;
        echo $editeur;
        echo $date_sortie;
        echo $plateforme;
        echo $description;
        echo $image_url;
        echo $site_url;
        insertGame($nom, $editeur, $date_sortie, $plateforme, $description, $image_url, $site_url);
    }
}