<?php


class Car
{
	private $id;
	private $carBrand;
	private $carrying;

	public function getCarBrand()
	{
		return $this->carBrand;
	}

	public function setCarBrand($name)
	{
		return $this->carBrand = $name;
	}

	public function getCarrying()
	{
		return $this->carrying;
	}

	public function setCarrying($name)
	{
		return $this->carrying = $name;
	}

}
