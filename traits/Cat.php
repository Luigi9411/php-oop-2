<?php

trait Cat {
	public $cat = 'cat';

	function isCat($cat) {
        if(!$this->$cat= 'cat') {
            throw new Exception('Is not cat');
        }
    }
    
     
}