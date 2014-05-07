<?php

class Context
{
	private $lang_name;
    private $magazine_name;
    private $method_url_name;
    private $method_list_name;
    private $query_string_name;
    private $shop_name;

    const FRONT_OFFICE = 'front';
    const BACK_OFFICE = 'back';

    static function getLangs()
	{
		return array('es','en');
	}

	public function init($app_mode = self::FRONT_OFFICE)
    {
        $suffix = $app_mode != '' ? '_'.$app_mode : '';

        $this->setLangName('lang'.$suffix);
        $this->setMagazineName('magazine'.$suffix);
        $this->setMethodUrlName('method_url_params'.$suffix);
        $this->setMethodListName('method_list_params'.$suffix);
        $this->setQueryStringName('query_string'.$suffix);
        $this->setShopName('shop'.$suffix);

        $this->setAppModeContext($app_mode);
    }

    public function setLangName($lang_name)
    {
        $this->lang_name = $lang_name;
    }

    public function getLangName()
    {
        return $this->lang_name;
    }

    public function setMagazineName($magazine_name)
    {
        $this->magazine_name = $magazine_name;
    }

    public function getMagazineName()
    {
        return $this->magazine_name;
    }

    public function setMethodListName($method_list_name)
    {
        $this->method_list_name = $method_list_name;
    }

    public function getMethodListName()
    {
        return $this->method_list_name;
    }

    public function setMethodUrlName($method_url_name)
    {
        $this->method_url_name = $method_url_name;
    }

    public function getMethodUrlName()
    {
        return $this->method_url_name;
    }

    public function setQueryStringName($query_string_name)
    {
        $this->query_string_name = $query_string_name;
    }

    public function getQueryStringName()
    {
        return $this->query_string_name;
    }

    public function setShopName($shop_name)
    {
        $this->shop_name = $shop_name;
    }

    public function getShopName()
    {
        return $this->shop_name;
    }

    /** lang is already defined in the session? **/
    function isLangContextDefined(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getLangName()) ? TRUE : FALSE;
    }

    function setLangContext($lang){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getLangName(), $lang);
    }

    /** lang defined with the last call of Base_controller:setcontext during the navigation*/
    function getLangContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getLangName()) ?
            $CI->session->userdata($this->getLangName()) : 'fr';
    }

    function setMagazineContext($magazine){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getMagazineName(), $magazine);
    }

    /** Magazine defined with the last call of Base_controller:setcontext during the navigation*/
    function getMagazineContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getMagazineName()) ?
            $CI->session->userdata($this->getMagazineName()) : NULL;
    }

    /** remove the current magazine data*/
    function removeMagazineContext(){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getMagazineName(), false);
    }

    function setParamsUrlContext($params_url){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getMethodUrlName(), $params_url);
    }

    /** params defined with the last call of Base_controller:setcontext during the navigation*/
    function getParamsUrlContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getMethodUrlName()) ?
            $CI->session->userdata($this->getMethodUrlName()) : '';
    }

    function setParamsListContext($params_list){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getMethodListName(), $params_list);
    }

    /** params defined with the last call of Base_controller in array form:setcontext during the navigation*/
    function getParamsListContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getMethodListName()) ?
            $CI->session->userdata($this->getMethodListName()) : array();
    }

    function removeParamContext(){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getMethodUrlName(), '');
        $CI->session->set_userdata($this->getMethodListName(), array());
    }

    function setQueryStringContext($query_string){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getQueryStringName(), $query_string);
    }

    function getQueryStringContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getQueryStringName()) ?
            $CI->session->userdata($this->getQueryStringName()) : '';
    }

    function setShopContext($shop){
        $CI =& get_instance();
        $CI->session->set_userdata($this->getShopName(), $shop);
    }

    function getShopContext(){
        $CI =& get_instance();
        return $CI->session->userdata($this->getShopName()) ?
            $CI->session->userdata($this->getShopName()) : false;
    }

    function setAppModeContext($app_mode)
    {
        $CI =& get_instance();
        $CI->session->set_userdata('app_mode', $app_mode);
    }

    function getAppModeContext()
    {
        $CI =& get_instance();
        return $CI->session->userdata('app_mode') ?
            $CI->session->userdata('app_mode') : self::FRONT_OFFICE;
    }
}