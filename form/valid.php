<?php
namespace M4A1\form;
    class Valid{
        
        public $val = 'This is validation';
        
        public function __construct() {
            echo $this->val.'. Class - '.__CLASS__.'<br />';
        }
        
        
    }