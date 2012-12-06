<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deals extends MY_Controller
{	
	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('Deals_model', 'Deals');
        $this->load->helper('form');
		$this->load->helper('url');
    }

    public function index()
    {
        redirect('welcome');
    }
    public function test()
    {
        $data['deals'] = $this->Deals->get_deals();
        $this->master_view('deals/index', $data);
    }
    
    public function submit()
    {
        $data[''] = '';
        
        $this->form_validation->set_rules('business_name', 'Business Name', 'required|max_length[128]');			
		$this->form_validation->set_rules('title', 'Deal Title', 'required|max_length[128]');			
		$this->form_validation->set_rules('description', 'Deal Description', 'required');			
		$this->form_validation->set_rules('address_1', 'Address 1', 'max_length[128]');			
		$this->form_validation->set_rules('address_2', 'Address 2', 'max_length[128]');			
		$this->form_validation->set_rules('city', 'City', 'max_length[128]');			
		$this->form_validation->set_rules('state', 'State', 'max_length[3]');			
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'is_numeric|max_length[10]');			
		$this->form_validation->set_rules('phone', 'Phone', 'max_length[20]');			
		$this->form_validation->set_rules('email', 'Email', 'valid_email|max_length[128]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->master_view('deals/submit', $data);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'business_name' => set_value('business_name'),
					       	'title' => set_value('title'),
					       	'description' => set_value('description'),
					       	'address_1' => set_value('address_1'),
					       	'address_2' => set_value('address_2'),
					       	'city' => set_value('city'),
					       	'state' => set_value('state'),
					       	'zip_code' => set_value('zip_code'),
					       	'phone' => set_value('phone'),
					       	'email' => set_value('email')
						);
					
			// run insert model to write data to db
		
			if ($this->Deals->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('deals/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
    
    function success()
    {
        $data[''] = '';
        $this->master_view('deals/success', $data);
    }
}