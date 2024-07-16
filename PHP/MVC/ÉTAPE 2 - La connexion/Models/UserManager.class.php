<?php
require_once './Models/MyDbConnection.php';

class UserManager {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    // Page read
    public function getAllUsers() {
        $sql = '
        SELECT * FROM users
        LEFT JOIN userroles ON users.id = userroles.user_id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Page update
    public function getUserById($id) {
        $sql = "
        SELECT users.id, users.nom, users.prenom, users.email, users.telephone, users.image_name, userroles.role
        FROM users
        LEFT JOIN userroles ON users.id = userroles.user_id
        WHERE users.id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $image, $nom, $prenom, $email, $telephone, $role) {
        try {
            $stmt = $this->pdo->prepare('UPDATE users SET image_name = ?, nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?');
            $stmt->execute([$image, $nom, $prenom, $email, $telephone, $id]);

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

    // Méthode pour ajouter un utilisateur
    public function addUser($image, $nom, $prenom, $email, $telephone, $role) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO users (image_name, nom, prenom, email, telephone) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([$image, $nom, $prenom, $email, $telephone]);

            $userId = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare('INSERT INTO userroles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Nouvel utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
}
