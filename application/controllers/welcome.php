<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
    }
    
	public function index()
	{
        $data[''] = '';
		$this->master_view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */