<?php

namespace  Model;

class Car
{
	private $id;
	private $carBrand;
	private $carrying;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}

	public function getCarBrand()
	{
		return $this->carBrand;
	}

	public function setCarBrand($brand)
	{
		return $this->carBrand = $brand;
	}

	public function getCarrying()
	{
		return $this->carrying;
	}

	public function setCarrying($carrying)
	{
		return $this->carrying = $carrying;
	}

}
