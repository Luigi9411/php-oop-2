<?php
class User
{
	public $name;
	public $creditCard;
	public $sconto = 0;

	public function __construct($name, $creditCard, $sconto)
	{
		$this->name = $name;
		$this->creditCard = $creditCard;
		$this->sconto = $sconto;
	}
}