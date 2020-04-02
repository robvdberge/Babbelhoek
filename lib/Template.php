<?php
// Template Class
// Creates a template/View object

class Template
{
    //path to template
    protected $template;

    // Vars passed in
    protected $vars = array();

    // Class Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    // get template vars
    public function __get ($key)
    {
        return $this->vars[$key];
    }

    // set template vars
    public function __set ($key, $value)
    {
        return $this->vars[$key] = $value;
    }

    // Convert object to string
    public function __toString()
    {
        extract( $this->vars );
        chdir( dirname ($this->template));
        
        // start buffer
        ob_start();
        include basename($this->template);
        
        // clear buffer
        return ob_get_clean(); 
    }
}