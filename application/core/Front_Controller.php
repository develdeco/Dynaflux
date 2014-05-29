<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->context->Init(Context::FRONT_OFFICE);
        $this->data["ajax"] = false;

        $this->load->model('entity_model');
        $this->load->model('traffic_model');
        $this->load->model('menu_model');

        $this->data['mostViewed'] = $this->traffic_model->GetMostViewed();
        $this->data['recentlyViewed'] = $this->entity_model->GetRecentlyViewed();
        $this->data['topMenu'] = $this->menu_model->GetFullMenu('top');
    }

    function LoadView($view, $data = array())
    {
        $data = !empty($data) ? $data : $this->data;

        $this->load->view('front/common/header', $data);
        $this->load->view('front/'.$view, $data);
        $this->load->view('front/common/footer', $data);
    }
}
