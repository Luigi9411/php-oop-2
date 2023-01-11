<?php
abstract class Products
{
	
	private string $id;
	private string $name;
	private string $category;
	private string $description;
	private int $availableStartMonth;
	private int $availableEndMonth;
	private int $availableQty;
	private int $price;
	
	public function __construct($id)
	{

		$this->isAvailable();
		$this->decrementAvailableQty();
	}
	

	public function isAvailable ()
	{
		if ($this->availableQty == 0) {
			return false;
		}
		$currentMonth = (int) date('m');
		if ($this->availableStartMonth <= $currentMonth && $currentMonth <= $this->availableEndMonth) {
			return true;
		} else {
			return false;
		}
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function decrementAvailableQty()
	{
		$this->availableQty--;
		return $this;
	}


}



	