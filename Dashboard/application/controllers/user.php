<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    /**
     * Index page for Magazine controller.
     */
    public function index() {
		
        $this->load->view('header/header');
		$this->load->view('header/nav');
		$this->load->library('table');
		  
		$user_array = array();
        $this->load->model('Users');
		$users = $this->Users->get();
        foreach ($users as $user) {
                $user_array[] = array(
                $user->user_id,
                $user->username,
                $user->name,
				$user->email,
				anchor('user/update/'.$user->user_id,'Update')." ".anchor('user/delete/'.$user->user_id,'Delete', array('onClick' => "return deleteConfirm($user->user_id);"))
            );
        }
        $this->load->view('user', array(
            'users' => $user_array
        ));
	        $this->load->view('header/footer');
    }
    
   
  public function delete($user_id){
	   
	  $this->load->model('Users');
	  $user= new Users();
	  $user->load($user_id);
	  if(!$user->user_id){
		 show_404();
	  }
	  $user->delete();
	redirect('/user');
	
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
	  
	  
	  public function Update($user_id){
	 
	 $this->load->helper('form');
    $this->load->view('header/header');	
	$this->load->view('header/nav');    
        // Populate users.
        if ($this->input->server('REQUEST_METHOD') === 'POST')
{
		$this->load->model('Users');
        $user = new Users();
		$user->load($user_id);
        $user->username = $this->input->post('inputUName');
        $user->name = $this->input->post('inputName');
        $user->email = $this->input->post('inputEmail');
		$user->password = $this->input->post('inputPassword');
        $user->save();
		redirect('/user');
}

      $this->load->model('Users');
	  $user = new Users();
	  $user->load($user_id);
	  $user_array['data']= $user;
	  $user_array['title']='Update User';
	  if(!$user->user_id){
		 show_404();
	  }
	  
	$this->load->vars($user_array);
	$this->load->view('user_update');
	
  	$this->load->view('header/footer');
	  
	  }
  
  
}