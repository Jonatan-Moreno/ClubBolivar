<?php
require_once 'app/MovieModel.php';
require_once 'app/MovieView.php';

class MovieController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new MovieModel();
        $this->view = new MovieView();
    }

    function room(){
        $rooms = $this->model->getRooms();

        $this->view->showRooms($rooms);

    }

}