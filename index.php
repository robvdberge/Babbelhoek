<?php 
include 'core/init.php';
// Open new Topic
$topic = new Topic;

// Get template
$template = new Template('templates/frontpage.php');

// Assign vars
$template->titel            = 'Welkom op de BabbelHoek';
$template->topics           = $topic->getAllTopics();
$template->totalTopics      = $topic->getTotalTopics();
$template->totalGebruikers  = $topic->getTotalGebruikers();
$template->totalCats        = $topic->getTotalCats();

// Display the template
echo $template;
?>
