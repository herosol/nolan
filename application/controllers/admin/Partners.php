<?php

class Partners extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        $this->load->model('Master_model','master');
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/partners';
        $this->data['rows'] = $this->master->get_data('team');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage() {

        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/partners';
        
        if ($this->input->post()) {
            $vals = $this->input->post();
            if (($_FILES["image"]["name"] != "")) {
                $this->remove_file($this->uri->segment(4));
                $image = upload_image(UPLOAD_PATH.'/team', 'image');
                generate_thumb(UPLOAD_PATH.'team/',UPLOAD_PATH.'team/',$image['file_name'],600,'thumb_');
                if (!empty($image['file_name'])) {
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/partners/manage/' . $this->uri->segment(4), 'refresh');
                }
               
            }
            $this->master->insert_data('team',$vals,'id',$this->uri->segment(4));
            setMsg('success', 'Member has been saved successfully.');
            redirect(ADMIN . '/partners', 'refresh');
        }    
        $this->data['row'] = $this->master->get_data_row('team',array('id'=>$this->uri->segment(4)));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete() {
        $this->remove_file($this->uri->segment(4));
        $this->master->delete_row('team',array('id'=>$this->uri->segment(4)));
        setMsg('success', 'Member has been deleted successfully.');
        redirect(base_url() . ADMIN . '/partners', 'refresh');
    }

    function remove_file($id) {
        $arr = $this->master->get_data_row('team',array('id'=>$id));
        $filepath = "./" .UPLOAD_PATH. "/team/" . $arr->image;
        $thumb_filepath = "./" .UPLOAD_PATH. "/team/thumb_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($thumb_filepath)) {
            unlink($thumb_filepath);
        }
        return;
    }

}

?>