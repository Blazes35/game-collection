<?php
require 'DBModel.php';
require 'FormModel.php';

class FormModel extends DBModel {

        public function __construct() {
            parent::__construct();
        }

        function insertGame($nom, $editeur, $date_sortie, $plateforme, $description, $image_url, $site_url) {
           

            $query = "INSERT INTO jeu (nom, editeur, date_sortie, plateforme, description, image_url, site_url) VALUES (:nom, :editeur, :date_sortie, :plateforme, :description, :image_url, :site_url)";
            $stmt = $this->getDB()->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':editeur', $editeur);
            $stmt->bindParam(':date_sortie', $date_sortie);
            $stmt->bindParam(':plateforme', $plateforme);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image_url', $image_url);
            $stmt->bindParam(':site_url', $site_url);
            $stmt->execute();
        }


}