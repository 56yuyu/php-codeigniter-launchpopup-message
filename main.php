<?php
class Main extends CI_Controller {
    public function __construct(){
	parent::__construct();	
    }

    public function index(){
		
	if(ismobile()){
		$this->load->view('home_stopper_mob', $data);
	}else{
		$this->load->view('home_stopper', $data);
	}
    }
	
    public function testConn() {
		
	echo '<pre>';
	print_r(generateDbConfig());
    }
}