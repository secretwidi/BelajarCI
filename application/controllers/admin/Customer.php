<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Customer_model");
        $this->load->library('form_validation');
    }

    public function index()
	{
       $data["Customer"] = $this->Customer_model->getAll();
       $this->load->view("admin/Customer/list", $data);

	}
}
?>
