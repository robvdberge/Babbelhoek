<?php

// return the number of replies on a topic
function replyCount($topic_id)
{
    $db = new Database;
    $db->query("SELECT * FROM reacties WHERE topic_id = :topic_id");
    $db->bind(':topic_id', $topic_id);
    // run query & get result
    $result = $db->resultset();

    return $db->rowCount();
}

// Get all categories
function getCats()
{
    $db = new Database;
    $db->query("SELECT * FROM categorien");
    $result = $db->resultset();

    return $result;
}

// Get all replies & posts
function userPostCount($gebruikersId)
{
    // get nr of topics
    $db = new Database;
    $db->query("SELECT * FROM topics WHERE gebruikers_id = :gebruikersId");
    $db->bind(':gebruikersId', $gebruikersId);
    $db->resultset();
    $topicsNr = $db->rowCount();

    // get nr of replies
    $db->query("SELECT * FROM reacties WHERE gebruikers_id = :gebruikersId");
    $db->bind(':gebruikersId', $gebruikersId);
    $db->resultset();
    $replieNr = $db->rowCount();
    return $replieNr + $topicsNr;

}