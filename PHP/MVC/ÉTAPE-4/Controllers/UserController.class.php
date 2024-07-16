<?php
require_once './Models/UserManager.class.php';

class UserController {
    private $userManager;

    public function __construct() {
        $this->userManager = new UserManager();
    }

    public function listUsers() {
        $users = $this->userManager->getAllUsers();
        require './views/read.view.php';
    }

    public function UpdateForm($id) {
        $utilisateur = $this->userManager->getUserById($id);
        require './views/update.view.php';
    }

    public function updateUser($data, $files) {
        $id = $data['id'];
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $telephone = $data['telephone'];
        $role = $data['role'];
        $nomImage = $data['currentImage'];

        // Gestion de l'upload de l'image
        if (isset($files['image']) && $files['image']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $files['image']['tmp_name'];
            $name = basename($files['image']['name']);
            move_uploaded_file($tmp_name, "public/images/$name");
            $nomImage = $name;
        }

        $message = $this->userManager->updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
        $this->listUsers(); 
    }

    public function deleteUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $id = $_POST['id'];
            $message = $this->userManager->deleteUser($id);
        }

        $users = $this->userManager->getAllUsers();
        require './views/delete.view.php';
    }

    public function createUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $password = $_POST['password'];
            $role = $_POST['role'];
    
            $imageName = '';
            if (isset($_FILES['image_name']) && $_FILES['image_name']['error'] === UPLOAD_ERR_OK) {
                $tmpName = $_FILES['image_name']['tmp_name'];
                $imageName = basename($_FILES['image_name']['name']);
                $uploadDir = 'uploads/'; 
                $uploadFile = $uploadDir . $imageName;
    
                if (isset($files['image']) && $files['image']['error'] === UPLOAD_ERR_OK) {
                    $tmp_name = $files['image']['tmp_name'];
                    $name = basename($files['image']['name']);
                    move_uploaded_file($tmp_name, "./public/images/" . $name);
                    $nomImage = $name;
                }
            }
    
            $message = $this->userManager->createUser($imageName, $nom, $prenom, $email, $telephone, $password, $role);
    
            require './views/create.view.php'; 
        } else {
            require './views/create.view.php';
        }
    }
    
}
