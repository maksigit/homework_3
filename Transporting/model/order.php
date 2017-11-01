<?php

namespace  Model;

class Order
{
	private $id;
	private $date;
	private $driver;
	private $client;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}
	public function getDate()
	{
		return $this->date;
	}

	public function setDate($name)
	{
		return $this->date = $name;
	}

	public function getDriver()
	{
		return $this->driver;
	}

	public function setDriver($name)
	{
		return $this->driver = $name;
	}

	public function getClient()
	{
		return $this->client;
	}

	public function setClient($name)
	{
		return $this->client = $name;
	}

}
