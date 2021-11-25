<?php

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        $this->load->model('Withdraw_model', 'withdraw_model');
    }
    
    public function index()
    {
        $this->data['pageView']  = ADMIN."/dashboard";
        $this->data['dashboard'] = "1";
        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }
    
}

?>  