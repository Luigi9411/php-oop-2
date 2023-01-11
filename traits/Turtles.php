<?php

trait Turtle {
	public $turtle = 'turtle';

	function isTurtle($turtle) {
        if(!$this->$turtle= 'turtle') {
            throw new Exception('Is not turtle');
        }
    }
    
     
}