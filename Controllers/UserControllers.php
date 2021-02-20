<?php

require "../Models/UserModel.php";

class UserControllers 
{

    private $userModels;
    
    public function __construct()
    {
        $this->userModels = new UserModel();
    }

    public function create()
    {  
        echo $this->userModels->create();
    }

    public function update()
    {
        echo $this->userModels->update();
    }

    public function delete()
    {
        echo $this->userModels->delete();
    }

    public function listAll()
    {
        echo $this->userModels->listAll();
    }

    public function listShow()
    {
        echo $this->userModels->listShow();
    }
}
