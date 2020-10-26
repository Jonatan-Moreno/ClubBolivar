<?php

class MovieModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_club_bolivar;charset=utf8', 'root', '');
    }

    /**
     *  Obtiene la lista de peliculas de la DB según género
     */

    function getRooms(){
        $query = $this->db->prepare('SELECT * FROM habitaciones');
        $query->execute();
        $rooms = $query->fetchAll(PDO::FETCH_OBJ);
        return $rooms;
        
    }
}