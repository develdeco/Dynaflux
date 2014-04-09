<?php

class Main_front extends Front_Controller
{
	function home()
	{
		$this->load->view('front/home');
	}	

	function contact()
	{
		$this->load->view('front/contact');
	}

	function news($id)
	{
		$this->load->view('front/news');
	}
}