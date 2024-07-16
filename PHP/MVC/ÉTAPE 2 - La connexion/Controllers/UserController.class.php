<?php
require_once './Models/UserManager.class.php';

class UserController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function listUsers()
    {
        $users = $this->userManager->getAllUsers();
        require './views/read.view.php';
    }
    
    public function updateForm($id){
        $utilisateur = $this->userManager->getUserById($id);
        require "./views/update.view.php";
    }

    public function updateUser($data, $files){
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $nameImage = $data['currentImage'];


        // gestion de l'uploead de l'image

        if (isset($files['image']) && $files['image']['error'] == UPLOAD_ERR_OK) {
            $imgName = basename($files['image']['name']);
            move_uploaded_file($files['image']['tmp_name'], './public/images/' . $imgName);
            $nameImage = $imgName;
        }

        $message = $this->userManager->updateUser($id,$nameImage, $nom, $prenom, $email, $telephone, $role);
        $this->listUsers();
        


    }
    
}


