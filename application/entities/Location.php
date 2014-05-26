<?php

class Location
{
	var $idLocation;
	var $name;
	var $latitude;
	var $longitude;
	var $address;
	var $phone;

	public function getIdLocation()
	{
	    return $this->idLocation;
	}
	
	public function setIdLocation($idLocation)
	{
	    $this->idLocation = $idLocation;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}

	public function getLatitude()
	{
	    return $this->latitude;
	}
	
	public function setLatitude($latitude)
	{
	    $this->latitude = $latitude;
	}

	public function getLongitude()
	{
	    return $this->longitude;
	}
	
	public function setLongitude($longitude)
	{
	    $this->longitude = $longitude;
	}

	public function getAddress()
	{
	    return $this->address;
	}
	
	public function setAddress($address)
	{
	    $this->address = $address;
	}

	public function getPhone()
	{
	    return $this->phone;
	}
	
	public function setPhone($phone)
	{
	    $this->phone = $phone;
	}
}