<?php
require_once 'models/CategoryModel.php';
require_once 'models/CommentModel.php';
require_once 'models/GameModel.php';
require_once 'api/APIView.php';

class ApiController
{
    private $categoryModel;
    private $gameModel;
    private $view;
    private $comment;
    private $data;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->gameModel = new GameModel();
        $this->view = new APIView();
        $this->comment = new CommentModel();
        $this->data = file_get_contents("php://input");
    }

    public function modelGame()
    {
        return $this->gameModel;
    }
    public function ApiView()
    {
        return $this->view;
    }
    public function modelComment()
    {
        return $this->comment;
    }
    function getData()
    {
        return json_decode($this->data);
    }
}
