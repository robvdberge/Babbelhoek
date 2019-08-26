<?php

function redirect($page = FALSE, $message = NULL, $message_type = NULL)
{
    // Set Location
    if ( is_string( $page ) ){
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // check for Message
    if ( $message != NULL ){
        // Set Message
        $_SESSION['message'] = $message;
    }
    // check for Message-type
    if ( $message_type != NULL ){
        // Set Message
        $_SESSION['message_type'] = $message_type;
    }
    // redirect to location
    header('location: ' . $location );
    exit;
}
// Give a message (if is set)
function displayMessage()
{
    if ( !empty( $_SESSION['message'])){
        $message = $_SESSION['message'];

        if ( !empty( $_SESSION['message_type'])){
            $message_type = $_SESSION['message_type'];

            if ( $message_type == 'error' ){
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // Unset session vars
        unset($_SESSION['message']);
        unset($_SESSION['message-type']);
    } else {
        echo '';
    }
}

// Check if logged in
function isLoggedIn()
{
    if ( isset($_SESSION['is_ingelogd'] )){
        return TRUE;
    } else {
        return FALSE;
    }
}

// Get user data from DB
function getUser()
{
    $userArray = array ();
    $userArray['gebruikers_id'] = $_SESSION['gebruikers_id'];
    $userArray['gebruikersnaam'] = $_SESSION['gebruikersnaam'];
    $userArray['naam'] = $_SESSION['naam'];
    return $userArray;
}