<?php

class EntityCreation
{
	var $id_entitycreation;
	var $entiy_id;
	var $entity_type;
	var $entity_title;
	var $date;

	public function getId_entitycreation()
	{
	    return $this->id_entitycreation;
	}
	
	public function setId_entitycreation($id_entitycreation)
	{
	    $this->id_entitycreation = $id_entitycreation;
	}

	public function getEntiy_id()
	{
	    return $this->entiy_id;
	}
	
	public function setEntiy_id($entiy_id)
	{
	    $this->entiy_id = $entiy_id;
	}

	public function getEntity_type()
	{
	    return $this->entity_type;
	}
	
	public function setEntity_type($entity_type)
	{
	    $this->entity_type = $entity_type;
	}

	public function getEntity_title()
	{
	    return $this->entity_title;
	}
	
	public function setEntity_title($entity_title)
	{
	    $this->entity_title = $entity_title;
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