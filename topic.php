<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/projects/BabbelHoek/core/init.php';
// Open new Topic
$topic = new Topic;
$user = new User;

// Get id# from URL
$topicId = $_GET['id'];

if ( isset($_POST['do_reply'])){
    $data = array();
    $data['topic_id'] = $_GET['id'];
    $data['inhoud'] = $_POST['reply'];
    $data['gebruikers_id'] = getUser()['gebruikers_id'];

    $valid = new Validator;
    $req_fields = array('reply');

    if ( $valid->isRequired($req_fields) ){
        if ( $topic->reply($data) ){
            redirect('topic.php?id=' . $topicId,'Je reactie is toegevoegd', 'success');
        } else {
            redirect('topic.php?id=' . $topicId,'Er is iets fout gegaan bij je reactie', 'error');
        }
    } else {
            redirect('topic.php?id=' . $topicId,'Het reactieveld was leeg!', 'error');
    }
}

// Get template and assign vars
$template = new Template('templates/topic.php');

$template->titel            = 'Alle reacties op "' . $topic->getTopic($topicId)->titel . '"';
$template->topicId          = $topicId;
$template->topic            = $topic->getTopic($topicId);
$template->reacties         = $topic->getReplies($topicId);
$template->totalTopics      = $topic->getTotalTopics();
$template->totalGebruikers  = $user->getTotalGebruikers();
$template->totalCats        = $topic->getTotalCats();

// Display the template
echo $template;

?>
