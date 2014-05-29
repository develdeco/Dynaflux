<?php

class Main_front extends Front_Controller
{
	function home()
	{
		$this->load->model('slider_model');
		$this->load->model('project_model');
		$this->load->model('product_model');
		$this->load->model('news_model');

		$this->data['slider'] = $this->slider_model->GetSlider(1);

		//$this->data['']

		$this->data['completed_projects'] = $this->project_model->GetCompleted();
		$this->data['oustanding_products'] = $this->product_model->GetOustanding();
		$this->data['lastest_news'] = $this->news_model->GetLatest();
		
		$this->LoadView('main/home');
	}	

	function contact()
	{
		$this->load->model('location_model');

		$this->data['locations'] = $this->location_model->GetLocations();

		$this->LoadView('main/contact');
	}

	function news()
	{
		$this->load->model('news_model');
		$this->load->model('images_model');

		$this->data['news'] = $this->news_model->GetNews($id_news);

		$this->data['images'] = $this->image_model->GetGroupImagesByEntity($id_news, 'gallery');

		$this->LoadView('news/detail');
	}
}