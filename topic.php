<?php 
include 'core/init.php';
// Open new Topic
$topic = new Topic;

// Get id# from URL
$topicId = $_GET['id'];

// Get template and assign vars
$template = new Template('templates/topic.php');

$template->titel            = 'Alle reacties op "' . $topic->getTopic($topicId)->titel . '"';
$template->topic            = $topic->getTopic($topicId);
$template->reacties         = $topic->getReplies($topicId);
$template->totalTopics      = $topic->getTotalTopics();
$template->totalGebruikers  = $topic->getTotalGebruikers();
$template->totalCats        = $topic->getTotalCats();

// Display the template
echo $template;

?>
