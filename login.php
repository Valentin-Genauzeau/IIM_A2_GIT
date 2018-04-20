<?php session_start();
/********************************
 * DATABASE & FUNCTIONS
 ********************************/
require('config/config-sample.php');
require('model/functions.fn.php');
/********************************
 * PROCESS
 ********************************/
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        if (userConnection($db, $_POST['email'], $_POST['password'])) {
            header('Location: dashboard.php');
        } else {
            $error = 'L\'email et\ou le mot de passe est incorrect.';
        }
    } else {
        $error = 'Le champs est requis !';
    }
}
/********************************
 * VIEW
 ********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';