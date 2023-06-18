<?php
session_start();
if (isset($_POST['submit'])){
    if(isset($_POST['username']) and(empty($_POST['username']))){
        if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL )){
            if(isset($_POST['password']) and empty($_POST['password'])){

                require "server.php";
                $password = sha1($_POST['username']);

                $getdata = $pdo->prepare("SELECT email FROM admin WHERE email=? and password = ?");
                $getdata ->execute(array($_POST['username'], $_POST['password']));

                $row  = $getdata->rowcount();

                if($row==true){
                    $SESSION['admin'] = $_POST['username'];
                    header("Location:dashboard.php");

                } else {
                    $erreur = "username ou password inconnue";
                }
            }else{
                $erreur = "veuillez saisir votre password"
            }
        }else{
            $erreur = "veuillez saisir un email valide!";
        }
    }else{
        $erreur = "veuillez saisir un username";
    }
}
?>