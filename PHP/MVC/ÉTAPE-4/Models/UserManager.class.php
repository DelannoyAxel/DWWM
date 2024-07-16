<?php
require_once './Models/MyDbConnection.php';

class UserManager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function getAllUsers()
    {
        $sql = '
            SELECT users.id, users.nom, users.prenom, users.email, users.telephone, users.image_name, userroles.role
            FROM users
            LEFT JOIN userroles ON users.id = userroles.user_id
        ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        $sql = '
            SELECT users.id, users.nom, users.prenom, users.email, users.telephone, users.image_name, userroles.role
            FROM users
            LEFT JOIN userroles ON users.id = userroles.user_id
            WHERE users.id = ?
        ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage) {
        try {
            $stmt = $this->pdo->prepare('UPDATE users SET nom = ?, prenom = ?, email = ?, telephone = ?, image_name = ? WHERE id = ?');
            $stmt->execute([$nom, $prenom, $email, $telephone, $nomImage, $id]);

            $stmt = $this->pdo->prepare('UPDATE userroles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    
    public function deleteUser($id) {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM users WHERE id = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function createUser($imageName, $nom, $prenom, $email, $telephone, $password, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        try {
            $sql = 'INSERT INTO users (image_name, nom, prenom, email, telephone, password) VALUES (?, ?, ?, ?, ?, ?)';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$imageName, $nom, $prenom, $email, $telephone, $hashedPassword]);
    
            $userId = $this->pdo->lastInsertId();
    
            $sql2 = 'INSERT INTO UserRoles (user_id, role) VALUES (?, ?)';
            $stmt = $this->pdo->prepare($sql2);
            $stmt->execute([$userId, $role]);
    
            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
    
}
