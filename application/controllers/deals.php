<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deals extends MY_Controller
{	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Deal_model', 'Deals');
    }

    public function index()
    {
        $data['items'] = $this->Deals->get_deals();
        $this->master_view('deal', $data);
    }
}