<?php

class Equipment_front extends Front_Controller
{
	function detail($id_equipment)
	{
		$this->data['brochures'] = $this->file_model->get_group_files_by_entity($id_equipment, 'brochures');
		$this->data['manuals'] = $this->file_model->get_group_files_by_entity($id_equipment, 'manuals');

		$this->data['menu'] = $this->menu_model->get_full_menu('equipment');

		$this->data['equipment'] = $this->product_model->get_product($id_equipment);

		$this->loadView('equipment/detail');
	}	

	function overview()
	{
		$this->data['menu'] = $this->menu_model->get_full_menu('equipment');

		$this->data['categories'] = $this->category_model->get_tree('equipment', 2, 1);

		$this->loadView('equipment/overview');
	}
}