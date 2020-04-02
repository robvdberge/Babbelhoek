<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/projects/BabbelHoek/core/init.php';
// table: topics(id, cat_id, gebruikers_id, titel, inhoud, laatste_login, gemaakt_op)
if ( isset( $_POST['do_create'])){
    // create validator object
    $valid = new Validator;
    $topic = new Topic;
    
    $data = array ();
    $data['titel'] = $_POST['title'];
    $data['inhoud'] = $_POST['body'];
    $data['cat_id'] = $_POST['category'];
    $data['gebruikers_id'] = getUser()['gebruikers_id'];
    $data['laatste_login'] = date('Y-m-d G:i:s');

    // Required fields
    $req_fields = array ('title', 'body', 'category');

    if ( $valid->isRequired($req_fields) ){
        if ( $topic->create($data) ){
            redirect('index.php', 'Uw Topic is geplaatst', 'success' );
        } else {
            redirect('topic.php?id=' . $topic_id , 'Uw Topic is niet geplaatst', 'error' );
        }
    } else {
        redirect('index.php', 'Vul alle verplichte (*) velden in', 'error' );
    }
}

// Get template and assign vars
$template = new Template('templates/create.php');

// Display the template
echo $template;
?>
