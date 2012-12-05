<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deal extends MY_Controller
{	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Deal_model', 'Deal');
    }

    public function index()
    {
        $data['items'] = $this->Deal->get_deals();
        $this->master_view('deal', $data);
    }
}