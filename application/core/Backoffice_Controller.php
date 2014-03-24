<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* Form Class for Admin */
class Backoffice_Controller extends Base_Controller
{
	protected $view_list;
    protected $view_form;
    protected $instances;

	function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') == FALSE) {
           redirect('admin/auth/login');
        }

        setlocale(LC_ALL, 'fr_FR.UTF-8');
        $this->lang->load('quiltmania');
        $this->lang->load('form_validation');
        $this->lang->load('upload');
        $this->lang->load('email');
        
        $this->load->library('images');
        $this->instances = array();

        $this->quilt_context->init(Quilt_context::BACK_OFFICE);
	}

	/* Index */
	function index()
	{
        $this->setContext(func_get_args());
		$this->list_all();
	}

	/* 
	 * Create register
	 */
	function create()
	{
        $this->setContext(func_get_args());
        $this->data['form_action'] = 'save';
		$this->load->view('admin/common/header_view', $this->data);
        $this->load->view('admin/'.$this->view_form, $this->data);
        $this->load->view('admin/common/footer_view', $this->data);
	}

    /*
	 * Edit register
	 */
    function edit($id=null)
    {
        $this->setContext(func_get_args());

        $this->data['form_action'] = "update/$id";
        if($id != null) $this->data['entity'] = $this->OBJ->get_entry($id, $this->instances);
        $this->load->view('admin/common/header_view', $this->data);
        $this->load->view('admin/'.$this->view_form, $this->data);
        $this->load->view('admin/common/footer_view', $this->data);
    }

    /**
     * Save a register, form submitted
     */
    function save()
    {
        $this->form_validation->set_rules($this->_get_rules());

        if($this->form_validation->run()){
            $entity = $this->_from_form();
            $this->data['save'] = $this->OBJ->insert_entry($entity);
            $this->data['action_performed'] = 'save';
            $this->success($entity);
        }
        else {
            $this->create();
        }
    }

    /**
	 * Update register
	 */
	function update()
	{
        $this->form_validation->set_rules($this->_get_rules());
        if($this->form_validation->run()){
            $entity = $this->_from_form();

            $this->data['update'] = $this->OBJ->update_entry($entity);
            
            $this->data['action_performed'] = 'update';
            $this->success($entity);
        }
        else {
            $this->_set_data();
            $this->edit();
        }
	}

	/**
	 * Delete register
	 */
	function remove($id=null,$confirm=null)
	{
        $this->setContext(func_get_args());

         $this->load->view('admin/common/header_view', $this->data);
        if(!$confirm){
            $this->data['remove'] = $this->OBJ->remove_entry($id);
            $this->data['action_performed'] = 'remove';
            $this->_set_success_message($this->OBJ->create_instance($id),true);
            $this->load->view('admin/common/success_message', $this->data);
        }
        else {
            $this->_set_confirm_dialog($this->OBJ->create_instance($id));
            $this->load->view('admin/common/confirmation_dialog', $this->data);
        }
        $this->load->view('admin/common/footer_view', $this->data);
	}

	/* default list */
	function list_all()
	{
        $this->setContext(func_get_args());
		$this->data['list'] = $this->OBJ->list_entries($this->instances);
        $this->load->view('admin/common/header_view', $this->data);
        $this->load->view('admin/'.$this->view_list, $this->data);
        $this->load->view('admin/common/footer_view', $this->data);
	}

    function success($entity,$delete = false)
    {
        $this->_set_success_message($entity,$delete);
        $this->load->view('admin/common/header_view', $this->data);
        $this->load->view('admin/common/success_message', $this->data);
        $this->load->view('admin/common/footer_view', $this->data);
    }

    function _get_image_path($entity, $file_name)
    {
        if($this->input->post('current_'.$file_name))
        {
            if(isset($_FILES[$file_name]) && $_FILES[$file_name]['error'] == 0)
            {
                $this->images->remove($this->input->post('current_'.$file_name));
                return $this->images->upload($entity, $file_name);
            }
            else
            {
                if($this->input->post('remove_'.$file_name))
                {
                    if($this->images->is_default($this->input->post('current_'.$file_name)))
                    {
                        return $this->images->get_default($entity, $file_name);
                    }
                    else
                    {
                        $this->images->remove($this->input->post('current_'.$file_name));
                        return '';
                    }
                }
                return $this->input->post('current_'.$file_name);
            }
        }
        else
        {
            if($_FILES[$file_name]['error'] == 0)
            {
                return $this->images->upload($entity, $file_name);
            }
            else
            {
                if($this->images->exists_default($entity, $file_name))
                    return $this->images->get_default($entity, $file_name);

                return '';
            }
        }
    }
}