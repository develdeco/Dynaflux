<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->context->init(Context::FRONT_OFFICE);
        $this->context->setShopContext(false);
        $this->data["ajax"] = false;

        $this->load->model('entity_model');
        $this->load->model('traffic_model');
        $this->load->model('menu_model');

        $this->data['most_viewed'] = $this->traffic_model->get_most_viewed();
        $this->data['recently_viewed'] = $this->entity_model->get_recently_viewed();
        $this->data['top_menu'] = $this->menu_model->get_full_menu('top');
    }

    function setContext($args = array())
    {
        //we now just use the url
        $args = explode("/", uri_string());

        $this->context->setLangContext(LANGUE_DU_SITE);
        $this->context->setMagazineContext('');
        $this->context->setParamsUrlContext('');
        $this->context->setParamsListContext(array());

        if($this->context->getLangContext() == 'fr')
        {
            setlocale(LC_ALL, 'fr_FR.UTF-8');
            $this->lang->load('quiltmania', 'french');
            $this->lang->load('form_validation', 'french');
            $this->lang->load('upload', 'french');
            $this->lang->load('email', 'french');
        }
        else
        {
            setlocale(LC_ALL, 'en_US.UTF-8');
            $this->lang->load('quiltmania', 'english');
            $this->lang->load('form_validation', 'english');
            $this->lang->load('upload', 'english');
            $this->lang->load('email', 'english');
        }

        if(!count($args) || empty($args[0]))
        {
            $this->data['magazine'] = 'quiltmania';
            $this->context->setMagazineContext('quiltmania');
            return;
        }

        /** look for a prestashop category in the url*/
        $prestashopCategories = array(
            'quiltmania',
            'simply_vintage',
            'carnet_de_scrap',
            'current',
            'hors_series',
            'livres',
            'modeles',
            'subscription-quiltmania',
            'subscription-simply-vintage',
            'subscription-carnet-de-scrap',
            'livres-nouveautes'
        );

        $params = array();
        foreach($args as $m)
        {
            if(in_array($m, $prestashopCategories))
            {
                $this->data['magazine'] = $m;
                $this->context->setMagazineContext($m);      
            }
            elseif($m=="patchwork")
            {
                $this->data['magazine'] = 'quiltmania';
                $this->context->setMagazineContext('quiltmania');      
            }
            elseif($m=="simply-vintage")
            {
                $this->data['magazine'] = 'simply_vintage';
                $this->context->setMagazineContext('simply_vintage');      
            }
            elseif($m=="carnets-de-scrap")
            {
                $this->data['magazine'] = 'carnet_de_scrap';
                $this->context->setMagazineContext('carnet_de_scrap');  
            }
            else
            {
                $params[] = $m;
            }
        }

        $params = implode('/', $params);
        $this->context->setParamsUrlContext($params);
    }

    function loadView($view, $data = array())
    {
        $data = !empty($data) ? $data : $this->data;

        $this->load->view('front/common/header', $data);
        $this->load->view('front/'.$view, $data);
        $this->load->view('front/common/footer', $data);
    }
}
