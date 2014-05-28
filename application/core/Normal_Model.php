<?php

class Normal_Model extends Base_Model
{
	function insert_entity($entity)
    {
        if($this->table != null)
        {
            return $this->db->insert($this->table, $entity);
        }
    }

    function insert_entities($entities)
    {
        if($this->table != null && is_array($entities))
        {
            return $this->db->insert_batch($this->table, $entities);
        }
    }

    function remove_entity($id)
    {
        if($this->table != null)
            return $this->db->delete($this->table, array($this->id_name => $id));
    }

    function update_entity($entity)
    {
        if($this->table != null)
        {
            $id_name = $this->id_name;
            return $this->db->update($this->table, $entity, array($id_name => $entity->$id_name));
        }
    }

    /** update just a column of a specific by its id entity*/
    function update_entity_column($entity_id, $column, $value)
    {
        if($this->table != null)
        {
            return $this->db->where($this->id_name,$entity_id)->set($column,$value)->update($this->table);
        }
    }
    
    function get_entity($id, $relationships = array())
    {
        if($this->table != null) 
        {
            $id_name = $this->id_name;
            $entity = array_pop($this->db->get_where($this->table, array("$id_name" => $id))->result($this->entity_class));
            if(method_exists($this, 'add_relationships')) $this->add_relationships($entity, $relationships);
            return $entity;
        }
    }

    function get_entities($relationships = array())
    {
        if($this->table != null) 
        {
            $this->db->order_by('last_modified', 'desc');
            $entities = $this->db->get($this->table)->result($this->entity_class);
            if(method_exists($this, 'add_relationships')) $this->add_relationships($entities, $relationships);
            return $entities;
        }
    }

    function get_entities_by_weight($relationships = array())
    {
        $this->db->order_by("weight", "asc");
        $entities = $this->db->get($this->table)->result($this->entity_class);
        if(method_exists($this, 'add_relationships')) $this->add_relationships($entities, $relationships);
        return $entities;
    }

    function add_relationships(&$entities, $relationships)
    {
        if(empty($relationships))
            return;

        if(!is_array($entities))
        {
            $entities = array($entities);
            $singular = true;
        }
        else
        {
            $singular = false;
        }

        foreach($entities as &$entity)
        {
            if(!empty($entity))
            {
                $this->on_relationship($entity, $relationships);
            }
        }

        if($singular)
        {
            $entities = array_pop($entities);
        }
    }
}