<?php

class User
{
	private $id;
	private $name;
	private $firstName;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		return $this->name = $name;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName($name)
	{
		return $this->firstName = $name;
	}

}