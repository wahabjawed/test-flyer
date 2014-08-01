<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {
    /**
     * Index page for Data controller.
     */
    public function index() {
		
        $this->load->view('header/header');
		$this->load->view('header/nav');
		    $this->load->library('table');
		  
		$data_array = array();
        $this->load->model(array('DataT','Users'));
		$datat = $this->DataT->get();
        foreach ($datat as $data) {
			
			  $user = new Users();
            $user->load($data->datauserid);
                $data_array[] = array(
                $data->data_id,
                $data->name,
                $data->tel,
				$data->address,
				$data->city,
				$data->zipcode,
				$data->email,
				$data->interest,
				$data->havesystem,
				$data->cdate,
				$user->username,
					anchor('data/update/'.$data->data_id,'Update')." ".anchor('data/delete/'.$data->data_id,'Delete', array('onClick' => "return deleteConfirm($data->data_id);"))
            );
        }
        $this->load->view('data', array(
            'data' => $data_array,
        ));
		  
		  
		  
		    
		  
		   
        $this->load->view('header/footer');
    }
    
public function delete($data_id){
	   
	  $this->load->model('DataT');
	  $data= new DataT();
	  $data->load($data_id);
	  if(!$data->data_id){
		 show_404();
	  }
	  $data->delete();
	redirect('/data');
	
	  }
  
  public function add(){
    $this->load->helper('form');
    $this->load->view('header/header');	
	$this->load->view('header/nav');    
        // Populate users.
        if ($this->input->server('REQUEST_METHOD') === 'POST')
{
		$this->load->model('Users');
        $user = new Users();
        $user->username = $this->input->post('inputUName');
        $user->name = $this->input->post('inputName');
        $user->email = $this->input->post('inputEmail');
		$user->password = $this->input->post('inputPassword');
        $user->save();
		
		echo "<div class='alert alert-success'>User Created Successfully!</div>";
}
      $user_array['data']=null;
	  $user_array['title']='Insert User';
	  $this->load->view('user_insert', array(
                'user' => $user_array,
            ));
  	  $this->load->view('header/footer');
	
	  }
	  
	  
	  public function Update($data_id){
	 
	//$this->load->helper('form');
    $this->load->view('header/header');	
	$this->load->view('header/nav');    
        // Populate users.
        if ($this->input->server('REQUEST_METHOD') === 'POST')
{
		$this->load->model('DataT');
        $datats = new DataT();
		$datats->load($data_id);
	    if(!$datats->data_id){
		 show_404();
    	  }	
	    $datats->tel = $this->input->post('inputTel');
        $datats->name = $this->input->post('inputName');
		$datats->email = $this->input->post('inputEmail');
		$datats->address = $this->input->post('inputAddress');
		$datats->city = $this->input->post('inputCity');
		$datats->interest = $this->input->post('inputInterest');
		$datats->havesystem = $this->input->post('inputSystem');
		$datats->cdate = $this->input->post('inputDate');
		$datats->zipcode = $this->input->post('inputZip');
		$datats->save();
		//echo $this->db->last_query();
		redirect('/data');
}

      $this->load->model('DataT');
	  $datat = new DataT();
	  $datat->load($data_id);
	  $data_array['data']= $datat;
	  $data_array['title']='Update Data';
	  if(!$datat->data_id){
		 show_404();
	  }
	  
	$this->load->vars($data_array);
	$this->load->view('data_update');
	
  	$this->load->view('header/footer');
	  
	  }
  
  
}