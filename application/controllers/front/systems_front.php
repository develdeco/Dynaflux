<?php

class Systems_Front extends Front_Controller
{
	function detail($id_system)
	{
		$this->data['brochures'] = $this->file_model->GetGroupFilesByEntity($id_system, 'brochures');
		$this->data['manuals'] = $this->file_model->GetGroupFilesByEntity($id_system, 'manuals');

		$this->data['menu'] = $this->menu_model->GetFullMenu('systems');

		$this->data['system'] = $this->product_model->GetProduct($id_system);

		$this->LoadView('product/detail');
	}

	function overview()
	{
		$this->data['menu'] = $this->menu_model->GetFullMenu('systems');

		$this->data['categories'] = $this->category_model->GetTree('systems', 2, 1);

		$this->LoadView('product/overview');
	}
}