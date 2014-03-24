<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* Form Class for Admin */
class Base_Controller extends CI_Controller
{
    protected $data;
    protected static $CI;

    function __construct()
    {
        parent::__construct();
        self::$CI = &get_instance();

        $this->config->load('project');
        
        date_default_timezone_set('America/Lima');

        $this->data = array();
        $this->data['data_controller'] = '';
        $this->data['data_action'] = '';

        $this->data['base_url'] = base_url();
        $this->data['img_path'] = base_url('www/img');
        $this->data['css_path'] = base_url('www/css');
        $this->data['js_path']  = base_url('www/js');

        $public = $this->config->item('public');
        $this->data['public'] = base_url('public').'/';
        $this->data['public_img'] = base_url($public['images']).'/';
        $this->data['public_files'] = base_url($public['files']).'/';

        require APPPATH.'entity/Product.php';
        require APPPATH.'entity/System.php';
        require APPPATH.'entity/Service.php';
        require APPPATH.'entity/News.php';
        require APPPATH.'entity/Project.php';
        require APPPATH.'entity/Location.php';
        require APPPATH.'entity/Product.php';
    }

    /*
    * set context variables 
    * lang, params and load lang files according to session variables and url params
    * args[n] = lang
    */
    function setContext($args = array())
    {
        if (count($args) >= 1)
        {
            $this->context->setParamsUrlContext('');
            $this->context->setParamsListContext(array());

            $langs = Tools::getLangs();

            if (count($args) >= 2)
            {
                $lang = $args[count($args)-1];

                if(in_array($lang, $langs))
                {
                    $this->data['lang'] = $args[count($args)-1];
                    $this->context->setLangContext($this->data['lang']);

                    $params = array();
                    for($i = 0; $i<count($args)-1; $i++)
                    {
                        $params[] = $args[$i];
                    }
                }
                else
                {
                    $params = array();
                    for($i = 0; $i<count($args); $i++)
                    {
                        $params[] = $args[$i];
                    }
                }

                $this->data['method_list_params'] = $params;
                $this->context->setParamsListContext($params);

                $params = implode('/', $params);
                $this->data['method_url_params'] = $params;
                $this->context->setParamsUrlContext($params);
            }
            else
            {
                $lang = $args[0];

                if(in_array($lang, $langs))
                {
                    $this->data['lang'] = $args[0];
                    $this->context->setLangContext($this->data['lang']);
                }
                else
                {
                    $this->data['method_list_params'] = $args;
                    $this->context->setParamsListContext($args);

                    $this->data['method_url_params'] = $args[0];
                    $this->context->setParamsUrlContext($args[0]);
                }
            }
        }
    }
    
}
