<?php

// Je demarre une session


session_start();

// stock les info dans la session
$_SESSION["username"] = "toto" ;
$_SESSION["mail"] = "toto@gmail.com" ;

// accedé aux informations de la session 
echo " Username : " . $_SESSION["username"]  ."<br>" ;
echo "Email : " . $_SESSION["mail"] ."<br>" ;

// je verifie si la session est bien active

if (isset($_SESSION["username"])) {
    echo "L'utilisateur est connecté : " . $_SESSION["username"] ;
}else{
    echo "L'utilisateur n'est pas connecté " ;
}

// Pour supprimer une variable de session 
unset($_SESSION["username"]);

// Détruit completement la session 
$_SESSION = array();


// detruit les cookies de la session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time(), -42000, 
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]  
);
}

session_destroy();

?>