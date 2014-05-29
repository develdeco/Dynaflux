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

        $this->data = array();

        $this->load->library('alerts');
        $this->data['alerts'] = Alerts::GetAlerts();
    }

    /*
     * Set Context Variables 
     * Lang, Params and load Lang Files according to session variables and URL Params
     * args[n] = lang
     */
    function SetContext($args = array())
    {
        if (count($args) >= 1)
        {
            $this->context->SetParamsUrl('');
            $this->context->SetParamsList(array());

            $langs = Tools::GetLangs();

            if (count($args) >= 2)
            {
                $lang = $args[count($args)-1];
                $params = array();
                
                if(in_array($lang, $langs))
                {
                    $this->data['langCode'] = $lang;
                    $this->context->SetLangCode($this->data['langCode']);
                    
                    for($i = 0; $i<count($args)-1; $i++)
                    {
                        $params[] = $args[$i];
                    }
                }
                else
                {
                    for($i = 0; $i<count($args); $i++)
                    {
                        $params[] = $args[$i];
                    }
                }

                $this->data['paramsList'] = $params;
                $this->context->SetParamsList($params);

                $params = implode('/', $params);
                $this->data['paramsURL'] = $params;
                $this->context->SetParamsUrl($params);
            }
            else
            {
                if(in_array($args[0], $langs))
                {
                    $this->data['langCode'] = $args[0];
                    $this->context->SetLangCode($this->data['langCode']);
                }
                else
                {
                    $this->data['paramsList'] = $args;
                    $this->context->SetParamsList($args);

                    $this->data['paramsURL'] = $args[0];
                    $this->context->SetParamsURL($args[0]);
                }
            }
        }
    }
    
}
