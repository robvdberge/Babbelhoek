<?php
// table: gebruikers(id, naam, email, avatar, gebruikersnaam, wachtwoord, over, laatste_login, eerste_login)
// table: categorien(id, naam, omschrijving)
// table: topics(id, cat_id, gebruikers_id, titel, inhoud, laatste_login, gemaakt_op)
// table: reacties(id, topic_id, gebruikers_id, inhoud, gemaakt_op)

// Gebruiker Class
class User{

    private $db;

    // Constructor
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query("INSERT INTO gebruikers(naam, email, avatar, gebruikersnaam, wachtwoord, over, laatste_login) 
                                    VALUES (:naam, :email, :avatar, :gebruikersnaam, :wachtwoord, :over, :laatste_login)");
        $this->db->bind(':naam', $data['naam']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':avatar', $data['avatar']);
        $this->db->bind(':gebruikersnaam', $data['gebruikersnaam']);
        $this->db->bind(':wachtwoord', $data['wachtwoord']);
        $this->db->bind(':over', $data['over']);
        $this->db->bind(':laatste_login', $data['laatste_login']);

        if ( $this->db->execute() ){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function uploadAvatar($file)
    {
        $allowedExt = array ('gif', 'jpg', 'jpeg', 'png');
        $temp = explode ('.', $file['avatar']['name']);

        // Name the extension
        $extension = end($temp);

        // Make a unique filename
        $unique_image = substr(md5(time()), 0, 10) . '.' . $extension; 

        // Check if extension is like gif,jpg,jpeg,png && size is smaller than 20.000 bytes
        if ((($file['avatar']['type'] == 'image/gif')  || 
            ($file['avatar']['type'] == 'image/jpg')   || 
            ($file['avatar']['type'] == 'image/jpeg')  || 
            ($file['avatar']['type'] == 'image/pjpeg') || 
            ($file['avatar']['type'] == 'image/x-png') || 
            ($file['avatar']['type'] == 'image/png'))  &&
            ($file['avatar']['size'] < 50000)          &&
            (in_array($extension, $allowedExt))){
            if ( $file['avatar']['error'] > 0 ){
                redirect('register.php', $file['avatar']['error'], ['error']);//redirect must be defined
            } else {
                move_uploaded_file($file['avatar']['tmp_name'], 'img/avatars/' . $unique_image);
                return $unique_image;
            }
        } else {
        redirect('register.php', 'Invalid File Type!', 'error');
        }
    }  
}