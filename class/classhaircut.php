<?php

    include __DIR__  .'/../database/connexion_bdd.php';

    class Dbhaircut {
        
        /**
         * Delete haircut selected from "haircut"
         *
         * @param int $id 
         *
         */
        public function  deleteDbhaircut($id){
            
            global $connect_bdd; 
            
            $sql_delete = "DELETE FROM `haircut_man` WHERE id=".$id;

            $connect_bdd->query($sql_delete);

        }
        
        
        /**
         * Display Dbhaircut "haircut" 
         *
         * @return $res_haircut_man
         */
        public function getDbhaircut(){

            global $connect_bdd; 

            $req_haircut_man = "SELECT * FROM `haircut_man`" ; //$sql : contient la requete sql 
            $res_haircut_man = $connect_bdd->query($req_haircut_man); //$result : execute la requete $sql

            return $res_haircut_man;

        }

            
        /**
         * Create Dbhaircut into "haircut"
         *
         * @param string $nom
         * @param int $prix
         *
         */
        public function createDbhaircut($nom,$prix){

            global $connect_bdd;

            $sql = "INSERT INTO `haircut_man`(`name`, `price`) VALUES ('".$nom."' , '".$prix."' )";
            $connect_bdd->query($sql);

        }

        
        /**
         * Update Dbhaircut "haircut"
         *
         * @param string $new_nom 
         * @param int $new_prix 
         * @param int $id_livre
         *
         */
        public function updateDbhaircut($new_nom,$new_prix,$id_hair){

            global $connect_bdd;

            $sql_update = "UPDATE `haircut_man` SET `name`= '".$new_nom."' ,`price`= '".$new_prix."' WHERE id =".$id_hair;
            $connect_bdd->query($sql_update);

        }

    }