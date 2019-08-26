<?php 
include 'core/init.php';

// Maak Topic aan
$topic = new Topic;
$user = new User;
$valid = new Validator;

// When a POST request is send:
if ( isset( $_POST['register'] ) ){
    $data = array();
    $data['naam']           = $_POST['name'];
    $data['email']          = $_POST['email'];
    $data['gebruikersnaam'] = $_POST['username'];
    $data['wachtwoord']     = md5($_POST['password']);
    $data['wachtwoord2']    = md5($_POST['password2']);
    $data['over']           = $_POST['about'];
    $data['laatste_login']  = date('Y-m-d G:i:s');

    // Create array with only REQUIRED Fields
    $req_array = array('name', 'email', 'username', 'password', 'password2');

    if ( $valid->isRequired( $req_array )){
        if ( $valid->isValidEmail( $data['email'] )){
            if ( $valid->passMatch( $data['wachtwoord'], $data['wachtwoord2'] )){
                // Upload avatar image->gets the new unique filename
                $fileName = $user->uploadAvatar($_FILES);
                if ( isset( $fileName ) ){
                    $data['avatar'] = $fileName;
                } else {
                    $data['avatar'] = 'gravatar.jpg';
                }
                if ( $user->register($data) ){
                    redirect('index.php', 'Je hebt nu een account en kan nu inloggen!','success');
                } else {
                    redirect('register.php', 'Er is iets foutgegaan, probeer aub opnieuw.', 'error');
                }
            } else {
                redirect( 'register.php', 'Uw wachtwoord klopt niet', 'error' );
            }
        } else {
            redirect( 'register.php', 'Voer een geldig Emailadres in', 'error' );
        }
    } else {
        redirect( 'register.php', 'Alle verplichte velden (*) moeten ingevuld zijn.', 'error' );
    }

    
}

// Get template and assign vars
$template = new Template('templates/register.php');

// Assign vars


// Display the template
echo $template;
?>
