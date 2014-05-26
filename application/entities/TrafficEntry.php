<?php

class TrafficEntry
{
	var $idTrafficEntry;
	var $EntityId;
	var $EntityType;
	var $ip;
	var $date;

	public function getIdTrafficEntry()
	{
	    return $this->idTrafficEntry;
	}
	
	public function setIdTrafficEntry($idTrafficEntry)
	{
	    $this->idTrafficEntry = $idTrafficEntry;
	}

	public function getEntityId()
	{
	    return $this->entityId;
	}
	
	public function setEntityId($entityId)
	{
	    $this->entityId = $entityId;
	}

	public function getEntityType()
	{
	    return $this->entityType;
	}
	
	public function setEntityType($entityType)
	{
	    $this->entityType = $entityType;
	}

	public function getIp()
	{
	    return $this->ip;
	}
	
	public function setIp($ip)
	{
	    $this->ip = $ip;
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