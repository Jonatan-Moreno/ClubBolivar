<?php
require_once "./libs/smarty/Smarty.class.php";

class MovieView {
    
    
    

        private $title;
        
    
        function __construct(){
            $this->title = "Productos";
        }

    function showRooms($rooms){
        $smarty = new Smarty();
        
        
        $smarty->assign('rooms', $rooms);

        $smarty->display('templates/rooms.tpl');
    }

}