<?php
Class Database
{
    private $host = DB_HOST;
    private $gebruiker = DB_GEBRUIKER;
    private $wachtwoord = DB_WACHTWOORD;
    private $dbnaam = DB_NAAM;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbnaam;
        // set opties
        $opties = array (
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO ( $dsn, $this->gebruiker, $this->wachtwoord, $opties);
        } catch ( PDOException $e ) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if ( is_null( $type )){
            switch ( TRUE ){
                case is_int ( $value ):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool ( $value ):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null ( $value ):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue( $param, $value, $type );
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function beginTransaction()
    {
        return $this->dbh->beginTransaction();
    }

    public function endTransaction()
    {
        return $this->dbh->commit();
    }

    public function cancelTransaction()
    {
        return $this->dbh->rollBack();
    }
}