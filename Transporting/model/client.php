<?php 

namespace  Model;

use user;
/**
* 
*/
class Client extends User
{
	private $order;
	private $date;

	public function getOrder()
	{
		return $this->order;
	}

	public function setOrder($name)
	{
		return $this->order = $name;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($name)
	{
		return $this->date = $name;
	}
}
