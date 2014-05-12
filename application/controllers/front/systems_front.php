<?php

class Systems_Front extends Front_Controller
{
	function detail($id_system)
	{
		$this->data['brochures'] = $this->file_model->get_group_files_by_entity($id_system, 'brochures');
		$this->data['manuals'] = $this->file_model->get_group_files_by_entity($id_system, 'manuals');

		$this->data['menu'] = $this->menu_model->get_full_menu('system');

		$this->data['system'] = $this->product_model->get_product($id_system);

		$this->loadView('system/detail');
	}	

	function overview()
	{
		$this->data['menu'] = $this->menu_model->get_full_menu('system');

		$this->data['categories'] = $this->category_model->get_tree('system', 2, 1);

		$this->loadView('system/overview');
	}
}