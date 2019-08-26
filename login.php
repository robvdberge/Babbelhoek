<?php
include 'core/init.php';

if ( isset($_POST['do_login'])){
    // get vars
    $username = $_POST['username'];
    $pass = md5( $_POST['password']);

    // Create user object
    $user = new User;
    if ( $user->login( $username, $pass ) ){
        redirect('index.php', 'Je bent nu ingelogd', 'success');
    } else{
        redirect('index.php', 'Je bent niet ingelogd', 'error');
    }
}

if ( isset($_POST['do_logout'] )){
    $user = new User;
    if ( $user->logout() ){
        redirect('index.php', 'Je bent nu uitgelogd', 'success');
    } else {
        redirect('index.php', 'Er is iets foutgegaan...', 'error');
    }
}