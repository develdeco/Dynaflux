<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Manage Images.
 *
*/
class Images
{
	var $baseDir;
	var $StorePerDir;
	var $null_photo;
    private $CI;

	function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('url');
		$this->CI->load->helper('file');
        $this->CI->load->library('upload');

        $this->CI->config->load('project');
        $public = $this->CI->config->item('public');

        $this->baseDir = $public['images'];
        $this->StorePerDir = 100;
        $this->null_photo	= '';
	}

	public function setBase($dir) {
		$this->baseDir=$dir;
	}

	/**
	 *
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	public function upload($entity, $file_name) {
		$file_path = $this->getFilePath($entity, $file_name);
		$image_name	= $file_name.'-'.date('YmdHis');
		$config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $file_path,
            'max_size' => 2000,
            'file_name'=> $image_name,
		);

		$this->CI->upload->initialize($config);

        if($this->CI->upload->do_upload($file_name)){
            if(!$image_data = $this->CI->upload->data()) {
                Alerts::error("Error Uploading Image");
                return '';
            }
        }

		//$image = $file_path.'/'.$this->CI->upload->file_name;
        $image = $entity.'/'.$file_name.'/'.$this->CI->upload->file_name;
		return $image;
	}

	function resize($origin,$props) {
		$new = str_replace("_o",'_'.$props['sub'],$origin);

		$config = array(
            'source_image' => $origin,
            'new_image' => $new,
            'maintain_ratio' => true,
            'width' => $props['width'],
            'height' => $props['height'],
		);

		$this->ci->image_lib->initialize($config);
		return $this->ci->image_lib->resize();

	}

	/**
	 * remove
	 *
     * @param $image
	 * @return void
	 */
	function remove($image)
    {//die('hola');
        if($image == '')
        {
            return;
        }
        else if($this->is_default($image))
        {
            return;
        }
        else if(file_exists($image))
        {
            unlink($image);
        }
        else if(file_exists($this->baseDir.'/'.$image))
        {
            unlink($this->baseDir.'/'.$image);
        }
	}

	public function getFilePath($entity, $file_name) {
        $file_path = $this->baseDir.'/'.$entity.'/'.$file_name;
        if(!is_dir($file_path)) {
           	mkdir($file_path, 777, true);
            chmod($this->baseDir.$entity, 777);
            chmod($file_path, 777);
        }
		return $file_path;
	}

    public function is_default($image)
    {
        $image = str_replace('\\', '/', $image);
        $split = explode('/', $image);
        $image_name = array_pop($split);
        return ($image_name == 'default.jpg');
    }

    public function exists_default($entity, $file_name)
    {
        $file_path = $this->getFilePath($entity, $file_name);
        $default_path = $file_path.'/default.jpg';
        return is_file($default_path);
    }

    public function get_default($entity, $file_name)
    {
        $default_path = $entity.'/'.$file_name.'/default.jpg';
        return $default_path;
    }

}