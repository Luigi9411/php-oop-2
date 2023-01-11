<?php

trait Dog {
	public $dog = 'dog';

	function isDog($dog) {
        if(!$this->$dog= 'dog') {
            throw new Exception('Is not dog');
        }
    }
    
     
}