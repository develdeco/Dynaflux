<?php

class Equipment_front extends Front_Controller
{
	function detail($id_equipment)
	{
		$this->load->model('file_model');
		$this->load->model('product_model');

		$this->data['brochures'] = $this->file_model->GetGroupFilesByEntity($id_equipment, 'brochures');
		$this->data['manuals'] = $this->file_model->GetGroupFilesByEntity($id_equipment, 'manuals');

		$this->data['menu'] = $this->menu_model->GetFullMenu('equipment');

		$this->data['equipment'] = $this->product_model->GetProduct($id_equipment);

		$this->LoadView('product/detail');
	}

	function overview()
	{
		$this->load->model('menu_model');
		$this->load->model('product_model');

		$this->data['menu'] = $this->menu_model->GetFullMenu('equipment');

		$this->data['categories'] = $this->category_model->GetTree('equipment', 2, 1);

		$this->LoadView('product/overview');
	}
}