<?php 
// table: gebruikers(id, naam, email, avatar, gebruikersnaam, wachtwoord, over, laatste_login, eerste_login)
// table: categorien(id, naam, omschrijving)
// table: topics(id, cat_id, gebruikers_id, titel, inhoud, laatste_login, gemaakt_op)
// table: reacties(id, topic_id, gebruikers_id, inhoud, gemaakt_op)

// Topic Class
Class Topic
{
    // init db variable
    private $db;

    // Constructor
    public function __construct()
    {
        $this->db = new Database;
    }

    // Get ALL topics
    public function getAllTopics()
    {
        $this->db->query("SELECT topics.*, gebruikers.gebruikersnaam, gebruikers.avatar, categorien.naam FROM topics 
        JOIN gebruikers ON topics.gebruikers_id = gebruikers.id JOIN categorien ON topics.cat_id = categorien.id
        ORDER BY topics.gemaakt_op DESC");
        // Krijg resultaat van query
        $result = $this->db->resultset();
        return $result;
    }

    // get total # of topics
    public function getTotalTopics()
    {
        $this->db->query("SELECT * FROM topics");
        $this->db->resultset();
        return $this->db->rowCount();
    }
    // get total # of categories
    public function getTotalCats()
    {
        $this->db->query("SELECT * FROM categorien");
        $this->db->resultset();
        return $this->db->rowCount();
    }

    public function getCatById($category)
    {
        $this->db->query("SELECT * FROM categorien WHERE id = :category");
        $this->db->bind(':category', $category);
        $result = $this->db->single();
        return $result;
    }

    // Get all topics of 1 category
    public function getTopicsByCatId($category)
    {
        $this->db->query("SELECT topics.*, gebruikers.gebruikersnaam, gebruikers.avatar, categorien.naam FROM topics 
                    JOIN gebruikers ON topics.gebruikers_id = gebruikers.id 
                    JOIN categorien ON topics.cat_id = categorien.id
                    WHERE cat_id = :category
                    ORDER BY topics.gemaakt_op DESC ");
        $this->db->bind(':category', $category);
        $result = $this->db->resultset();
        return $result;
    }

    // Get topic by id
    public function getTopic($topicId)
    {
        $this->db->query("SELECT * FROM topics WHERE id = :topicId");
        $this->db->bind(':topicId', $topicId);
        $result = $this->db->single();
        return $result;
    }
    // Get all replies on topic-Id
    public function getReplies($topicId)
    {
        $this->db->query("SELECT reacties.*, gebruikers.gebruikersnaam, gebruikers.avatar, gebruikers.id 
                    FROM reacties 
                    JOIN gebruikers ON reacties.gebruikers_id = gebruikers.id
                    WHERE topic_id = :topicId");
        $this->db->bind(':topicId', $topicId);
        $result = $this->db->resultset();
        return $result;
    }
    // Get all posts from a single user
    public function getByUser($user)
    {
        $this->db->query("SELECT topics.*, gebruikers.gebruikersnaam, gebruikers.avatar, categorien.naam FROM topics 
            JOIN gebruikers ON topics.gebruikers_id = gebruikers.id 
            JOIN categorien ON topics.cat_id = categorien.id
            WHERE gebruikers_id = :user
            ORDER BY topics.gemaakt_op DESC ");
        $this->db->bind(':user', $user);
        $result = $this->db->resultset();
        return $result;
    }
    // Get all info from a single user
    public function getUserById($user)
    {
        $this->db->query("SELECT * FROM gebruikers WHERE id = :user");
        $this->db->bind(':user', $user);
        $result = $this->db->single();
        return $result;
    }

    public function create( $data )
    {
        $this->db->query("INSERT INTO topics(cat_id, gebruikers_id, titel, inhoud, laatste_login)
                    VALUES (:cat_id, :gebruikers_id, :titel, :inhoud, :laatste_login)");
        $this->db->bind(':cat_id', $data['cat_id']);
        $this->db->bind(':gebruikers_id', $data['gebruikers_id']);
        $this->db->bind(':titel', $data['titel']);
        $this->db->bind(':inhoud', $data['inhoud']);
        $this->db->bind(':laatste_login', $data['laatste_login']);

        if ( $this->db->execute() ){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function reply($data)
    {
        $this->db->query("INSERT INTO reacties(topic_id, gebruikers_id, inhoud)
                                    VALUES (:topic_id, :gebruikers_id, :inhoud)");
        $this->db->bind(':topic_id', $data['topic_id']);
        $this->db->bind(':gebruikers_id', $data['gebruikers_id']);
        $this->db->bind(':inhoud', $data['inhoud']);

        if ( $this->db->execute() ){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
