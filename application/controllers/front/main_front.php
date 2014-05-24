<?php

class Main_front extends Front_Controller
{
	function home()
	{
		$this->load->model('slider_model');
		$this->load->model('project_model');
		$this->load->model('product_model');
		$this->load->model('news_model');

		$this->data['slider'] = $this->slider_model->get_slider(1);

		//$this->data['']

		$this->data['completed_projects'] = $this->project_model->get_completed();
		$this->data['oustanding_products'] = $this->product_model->get_oustanding();
		$this->data['lastest_news'] = $this->news_model->get_lastest();
		
		$this->loadView('main/home');
	}	

	function contact()
	{
		$this->load->model('location_model');

		$this->data['locations'] = $this->location_model->get_locations();

		$this->loadView('main/contact');
	}

	function news()
	{
		$this->load->model('news_model');
		$this->load->model('images_model');

		$this->data['news'] = $this->news_model->get_news($id_news);

		$this->data['images'] = $this->image_model->get_group_images_by_entity($id_news, 'gallery');

		$this->loadView('news/detail');
	}
}