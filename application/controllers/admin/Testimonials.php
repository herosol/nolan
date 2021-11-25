<?php

class Testimonials extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        $this->load->model('testimonial_model');
    }

    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/testimonials';

        $this->data['rows'] = $this->testimonial_model->get_rows(array());
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {
        $this->data['pageView'] = ADMIN . '/testimonials';
        if ($this->input->post()) {
            $vals = html_escape($this->input->post());
            $this->testimonial_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Phase has been saved successfully.');
            redirect(ADMIN . '/testimonials', 'refresh');
            exit;
        }
        $this->data['row'] = $this->testimonial_model->get_row_where(array('id' => $this->uri->segment('4')));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete($id) {
        $id = intval($id);
        if ($row = $this->testimonial_model->get_row($id)) {
            $this->testimonial_model->delete($this->uri->segment('4'));
            setMsg('success', 'Testimonial has been deleted successfully.');
            redirect(ADMIN . '/testimonials', 'refresh');
            exit;
        }
        else
            show_404();
    }

    function remove_file($id) {
        $arr = $this->testimonial_model->get_row($id);

        $filepath = "./" . UPLOAD_PATH . "/testimonials/" . $arr->image;
        $filepath_thumb = "./" . UPLOAD_PATH . "/testimonials/thumb_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb)) {
            unlink($filepath_thumb);
        }
        return;
    }

}

?>