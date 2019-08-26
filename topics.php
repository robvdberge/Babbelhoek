<?php 
include 'core/init.php';
// Open new Topic
$topic = new Topic;
$user = new User;

// Get Category id from $_GET
$category   = isset( $_GET['cat'] )? $_GET['cat'] : null;
// Get user id from $_GET
$userinfo   = isset( $_GET['user'] )? $_GET['user'] : null;

// Get template 
$template = new Template('templates/topics.php');

// Assign Vars
// If Cat is set in url, use only this cat
if ( isset( $category )){
    $template->topics = $topic->getTopicsByCatId($category);
    $template->titel = 'Alle Posts in "' . $topic->getCatById($category)->naam . '"';
} 
// if user is set in url, show all posts from this user
if ( isset( $userinfo )){
    $template->topics = $topic->getByUser($userinfo);
    $template->titel = 'Alle Posts van "' . $topic->getUserById($userinfo)->naam . '"';
} 
// if no user or cat is set in url, show all posts
if ( !isset($category) && !isset($userinfo)) { // if cat is not set, use all topics
    $template->topics = $topic->getAllTopics();
    $template->titel = 'Alle Posts';
}


$template->totalTopics      = $topic->getTotalTopics();
$template->totalGebruikers  = $user->getTotalGebruikers();
$template->totalCats        = $topic->getTotalCats();

// Display the template
echo $template;
?>