<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->quilt_context->init(Quilt_context::FRONT_OFFICE);
        $this->quilt_context->setShopContext(false);
        $this->data["ajax"] = false;
    }

    function setContext($args = array())
    {
        //we now just use the url
        $args = explode("/", uri_string());

        $this->quilt_context->setLangContext(LANGUE_DU_SITE);
        $this->quilt_context->setMagazineContext('');
        $this->quilt_context->setParamsUrlContext('');
        $this->quilt_context->setParamsListContext(array());

        if($this->quilt_context->getLangContext() == 'fr')
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
            $this->quilt_context->setMagazineContext('quiltmania');
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
                $this->quilt_context->setMagazineContext($m);      
            }
            elseif($m=="patchwork")
            {
                $this->data['magazine'] = 'quiltmania';
                $this->quilt_context->setMagazineContext('quiltmania');      
            }
            elseif($m=="simply-vintage")
            {
                $this->data['magazine'] = 'simply_vintage';
                $this->quilt_context->setMagazineContext('simply_vintage');      
            }
            elseif($m=="carnets-de-scrap")
            {
                $this->data['magazine'] = 'carnet_de_scrap';
                $this->quilt_context->setMagazineContext('carnet_de_scrap');  
            }
            else
            {
                $params[] = $m;
            }
        }

        $params = implode('/', $params);
        $this->quilt_context->setParamsUrlContext($params);
    }

}
