<?php

class Index extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pages_model','page');
    }

    function index()
    {
        $meta = $this->page->getMetaContent('home');
		$this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('home');
		if($data){
			$this->data['content'] = unserialize($data->code);            
			$this->data['meta_desc'] = json_decode($meta->content);
			$this->data['phases'] = $this->master->get_data_rows('testimonials', array('status'=>'1'));
			$this->data['faqs'] = $this->master->get_data_rows('faqs', ['status'=>'1'], 'ASC', 'sort_order');
			$this->data['team'] = $this->master->get_data_rows('team', ['status'=>'1']);
			$this->data['gallery'] = $this->master->get_data_rows('gallery', ['status'=>'1']);
			$this->load->view('index', $this->data);
		}else{
			show_404();
		}
    }

    
}

?>