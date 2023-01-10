<?php
abstract class Products
{
	protected $price;
	protected $available;

	public function __construct($price, $available)
	{
		$this->price = $price;
		$this->available = $available;
	}

}