<?php

Class Validator
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Check Required fields
    public function isRequired( $field_array )
    {
        foreach ( $field_array as $field ){
            if ( $_POST['' . $field . ''] == '' ){
                return FALSE;
            }
        }
        return TRUE;
    }

    // Validate Email 
    public function isValidEmail( $email )
    {
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL )){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // check if matching passwords
    public function passMatch( $pwd1, $pwd2 )
    {
        if ( $pwd1 === $pwd2 ){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}