<?php

    include __DIR__  .'/../database/connexion_bdd.php';

    class dbhaircutman {
        
        /**
         * Delete haircut selected from "haircut"
         *
         * @param int $id 
         *
         */
        public function  deletedbhaircutman($id){
            
            global $connect_bdd; 
            
            $sql_delete = "DELETE FROM `haircut_man` WHERE id=".$id;

            $connect_bdd->query($sql_delete);

        }
        
        
        /**
         * Display dbhaircutman "haircut" 
         *
         * @return $res_haircut_man
         */
        public function getdbhaircutman(){

            global $connect_bdd; 

            $req_haircut_man = "SELECT * FROM `haircut_man`" ; //$sql : contient la requete sql 
            $res_haircut_man = $connect_bdd->query($req_haircut_man); //$result : execute la requete $sql

            return $res_haircut_man;

        }

            
        /**
         * Create dbhaircutman into "haircut"
         *
         * @param string $nom
         * @param int $prix
         *
         */
        public function createdbhaircutman($nom,$prix){

            global $connect_bdd;

            $sql = "INSERT INTO `haircut_man`(`name`, `price`) VALUES ('".$nom."' , '".$prix."' )";
            $connect_bdd->query($sql);

        }

        
        /**
         * Update dbhaircutman "haircut"
         *
         * @param string $new_nom 
         * @param int $new_prix 
         * @param int $id_haircut
         *
         */
        public function updatedbhaircutman($new_nom,$new_prix,$id_hair){

            global $connect_bdd;

            $sql_update = "UPDATE `haircut_man` SET `name`= '".$new_nom."' ,`price`= '".$new_prix."' WHERE id =".$id_hair;
            $connect_bdd->query($sql_update);

        }

    }