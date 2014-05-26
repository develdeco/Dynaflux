<?php

class News_Model extends Base_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'news';
        $this->entity_class = 'News';
        $this->id_name = 'id_news';
	}

	function on_relationship(&$entity, $relationships)
	{
		
	}

	function get_latest()
	{
		$this->db->limit(5);
		return $this->db->get($this->table)->result($this->entity_class);
	}

	function get_news($id_news)
	{
		$this->get_entity($id_news);
	}
}