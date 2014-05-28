<?php

class TrafficEntry extends Entity
{
	var $id;
	var $EntityId;
	var $EntityType;
	var $ip;
	var $date;

	public function GetEntityId()
	{
	    return $this->entityId;
	}
	
	public function SetEntityId($entityId)
	{
	    $this->entityId = $entityId;
	}

	public function GetEntityType()
	{
	    return $this->entityType;
	}
	
	public function SetEntityType($entityType)
	{
	    $this->entityType = $entityType;
	}

	public function GetIp()
	{
	    return $this->ip;
	}
	
	public function SetIp($ip)
	{
	    $this->ip = $ip;
	}

	public function GetDate()
	{
	    return $this->date;
	}
	
	public function SetDate($date)
	{
	    $this->date = $date;
	}

}