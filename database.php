<?php
namespace M4A1;

class Database{
    
    public $connection = 'Connection to DB';
    
    public function __construct() {
        echo $this->connection.'. Class - '.__CLASS__.'<br />';
    }
    
    
    
}