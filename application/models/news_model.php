<?php

class News_Model extends Translation_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'news';
        $this->entity_class = 'News';
        $this->id_name = 'id_news';
	}

	function OnRelationship(&$entity, $relationships)
	{
		
	}

	function GetLatest()
	{
		$this->db->limit(5);
		return $this->db->get($this->table)->result($this->entity_class);
	}

	function GetNews($id_news)
	{
		$this->get_entity($id_news);
	}
}