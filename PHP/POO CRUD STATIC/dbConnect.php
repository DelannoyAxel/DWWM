<?php

abstract class DbConnect {
    // sert a ne pas crée d'instance de la classe car pas besoin de la modifier
    private static $instance = null;
    protected $pdo;

    protected function __construct() {
        // opérateur de fusion null ?: qui veux dire que ce qu'il y'a a gauche existe il recupere les donnés sinon il redirige vers la droite 
        // GETENV est une variable d'environement php par default il en existe d'autre 
        $host = getenv('DB_HOST') ?: 'localhost';
        $port = getenv('DB_PORT') ?: '3306';
        $db = getenv('DB_NAME') ?: 'repertoire';
        $user = getenv('DB_USER') ?: 'root';
        $pass = getenv('DB_PASS') ?: '';
        $charset = 'utf8mb4';
        
        // Utilisation d'un fichier de configuration SSL/TLS si nécessaire
        // c'est du réseau pour recuperé les certificat ou renvoyer la valeur nul s'il n'y en a pas 
        $sslCa = getenv('DB_SSL_CA') ?: null;
        $sslCert = getenv('DB_SSL_CERT') ?: null;
        $sslKey = getenv('DB_SSL_KEY') ?: null;

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // Ajouter des options SSL si configurées
        if ($sslCa && $sslCert && $sslKey) {
            $options[PDO::MYSQL_ATTR_SSL_CA] = $sslCa;
            $options[PDO::MYSQL_ATTR_SSL_CERT] = $sslCert;
            $options[PDO::MYSQL_ATTR_SSL_KEY] = $sslKey;
        }

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            // Utilisez une gestion des erreurs appropriée
            error_log($e->getMessage());
            die('Erreur de connexion à la base de données. Veuillez réessayer plus tard.');
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance->pdo;
    }
}
