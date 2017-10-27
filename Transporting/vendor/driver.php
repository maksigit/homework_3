<?php 

use user;
/**
* 
*/
class Driver extends User
{
	private $license;
	private $numberCar;
    private $car;

	public function getLicense()
	{
		return $this->license;
	}

	public function setLicense($name)
	{
		return $this->license = $name;
	}

	public function getNumberCar()
	{
		return $this->numberCar;
	}

	public function setNumberCar($name)
	{
		return $this->numberCar = $name;
	}

    public function getCar()
    {
        return $this->car;
    }

    public function setCar($name)
    {
        return $this->car = $name;
    }
}