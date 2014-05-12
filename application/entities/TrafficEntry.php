<?php

class TrafficEntry
{
	var $id_trafficentry;
	var $ip;
	var $reference_id;
	var $reference_type;
	var $date;

	public function getId_trafficentry()
	{
	    return $this->id_trafficentry;
	}
	
	public function setId_trafficentry($id_trafficentry)
	{
	    $this->id_trafficentry = $id_trafficentry;
	}

	public function getIp()
	{
	    return $this->ip;
	}
	
	public function setIp($ip)
	{
	    $this->ip = $ip;
	}

	public function getReference_id()
	{
	    return $this->reference_id;
	}
	
	public function setReference_id($reference_id)
	{
	    $this->reference_id = $reference_id;
	}

	public function getReference_type()
	{
	    return $this->reference_type;
	}
	
	public function setReference_type($reference_type)
	{
	    $this->reference_type = $reference_type;
	}

	public function getDate()
	{
	    return $this->date;
	}
	
	public function setDate($date)
	{
	    $this->date = $date;
	}

}