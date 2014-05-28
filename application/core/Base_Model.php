<?php

class Base_Model extends CI_Model
{
    protected $table;
    protected $entity_class;
    
    function __construct()
    {
        parent::__construct();        
        $this->table = null;
        $this->entity_class = null;
    }
}