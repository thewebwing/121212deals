<?php
class Deals_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_deals()
    {
        $this->db->select('*');
        $this->db->from('deals');
        $this->db->join('coords', 'coords.deal_id = deals.id', 'left');
        $query = $this->db->get();
        foreach ($query->result() as $deal) :
            $deal->phone = $this->format_phone($deal->phone);
            /** if(!$deal->lat || !$deal->lng):
                $address_array = array($deal->address_1, $deal->address_2, $deal->city, $deal->state, $deal->zip_code);
                $deal->map = $this->deal_map($address_array, $deal->id, TRUE);
            else:
                $coords = array($deal->lat, $deal->lng);
                $deal->map = $this->deal_map($coords, $deal->id);
            endif;**/
        endforeach;

        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('deals', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('deals', $this, array('id' => $_POST['id']));
    }

	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$this->db->insert('deals', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
    
    private function format_phone($phone)
    {
        $phone = preg_replace("/[^0-9]/", "", $phone);
     
        if(strlen($phone) == 7)
            return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
        elseif(strlen($phone) == 10)
            return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
        else
            return $phone;
    }
    
    function deal_map($location, $deal_id, $get_coords = FALSE) // $location is array that can hold lat/lon or address information
    {
        if(is_array($location)) :
            $location = implode(",", $location);
        endif;
        // Load the library
        $this->load->library('googlemaps');
        if($get_coords) :
            $get_lat_lng = $this->googlemaps->get_lat_long_from_address($location);
            if(!$get_lat_lng['0'] || !$get_lat_lng['1']) : return; endif;
            $coords = implode(",", $get_lat_lng);
        else :
            $coords = $location;
        endif;
        // Load our model
        /** $this->load->model('map_model', '', TRUE); */
        // Initialize the map, passing through any parameters
        $config['center'] = $coords;
        $config['zoom'] = "auto";
        $config['map_div_id'] = 'map_canvas'.$deal_id;
        $this->googlemaps->initialize($config);
        // Get the co-ordinates from the database using our model
        /** $coords = $this->map_model->get_coordinates(); */
        // Loop through the coordinates we obtained above and add them to the map
        $marker['position'] = $coords;
        $this->googlemaps->add_marker($marker);
        // Create the map
        $data = array();
        $data['map'] = $this->googlemaps->create_map();
        // Load our view, passing through the map data
        return($data);
    }
}