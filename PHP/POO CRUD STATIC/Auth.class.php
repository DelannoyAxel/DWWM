<?php

require_once 'MyDbConnection.php';

// on aurais pu faire une classe abstrait ici (pas d'instance d'une classe abstraite,) car 3 methode static au final pas de modification d'instance du tout

class Auth {
    public static function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function isAdmin($userId) {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT role FROM UserRoles WHERE user_id = ?');
        $stmt->execute([$userId]);
        $userRole = $stmt->fetch();
        return $userRole && $userRole['role'] === 'admin';
    }

    public static function verifyAdmin() {
        self::startSession();
        if (!isset($_SESSION['user_id'])) {
            echo "Session utilisateur non définie.";
            exit();
        } else {
            $userId = $_SESSION['user_id'];
            if (!self::isAdmin($userId)) {
                echo "L'utilisateur avec l'ID $userId n'est pas un administrateur.";
                exit();
            }
        }
    }
}
