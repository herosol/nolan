<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['site_settings'] = $this->getSiteSettings();
        $this->data['page']          = $this->uri->segment(1);
    }

    function getSiteSettings()
    {
        return $this->master->getRow("siteadmin", array('site_id' => '1'));
    }
}

class Admin_Controller extends CI_Controller
{

    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->data['adminsite_setting'] = $this->getAdmineSettings();
    }

    public function isLogged()
    {
        if ($this->session->loged_in < 1) {
            $this->session->set_userdata('admin_redirect_url', currentURL());
            redirect(ADMIN . '/login', 'refresh');
            exit;
        }
    }

    public function logged()
    {
        if ($this->session->loged_in > 0) {
            redirect(ADMIN , 'refresh');
            exit;
        }
    }

    function getAdmineSettings()
    {
        return $this->master->getRow("siteadmin", array('site_id' => '1'));
    }
}

?>