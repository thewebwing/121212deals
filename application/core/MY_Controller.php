<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function master_view($content_view, $data)
    {
        $data['content'] = $this->load->view($content_view, $data, true);
        $this->load->view('master', $data);
    }
}