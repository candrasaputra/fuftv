<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/account');
        $this->load->model('admin/tag_m');
    }
 
    public function index(){
    	$this->data['tg'] = $this->tag_m->get_tag();
        $this->data['title'] = 'Tag';
        $this->data['page'] = 'admin/tag/tag_v';
        $this->load->view('dashboard_v', $this->data);

    }
    public function pcsaddtag(){
        $post = $this->input->post();

         $data = array(
        'jdltag'       => $post['jdltag'],
        'tagalias'       => strtolower(url_title($post['jdltag'])),
        'destag'    => $post['destag'],
        );

        $this->tag_m->insert_tag($data);
        redirect(base_url('admin/tag'));
    }
    public function deletetag($id){
        $this->tag_m->delete_relasi_tag($id);
        $this->tag_m->delete_tag($id);
        redirect('admin/tag','refresh');
    }
    public function updatetag(){
                
        $post = $this->input->post();

         $data = array(
        'jdltag'       => $post['jdltag'],
        'tagalias'     => strtolower(url_title($post['jdltag'])),
        'destag'       => $post['destag'],
        );

        $id = $this->input->post('idtag');
        $this->tag_m->update_tag ($id, $data);
                
        redirect(base_url('admin/tag'));
    }

    public function detail() {
        $id = $this->input->post('idtag');
        $tag = $this->tag_m->get_tag_row($id);
        
        echo json_encode($tag);
    }
}