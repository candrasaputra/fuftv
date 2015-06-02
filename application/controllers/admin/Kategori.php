<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/account');
        $this->load->model('admin/kategori_m');
    }
    
    public function index()
    {
        $this->data['ktgr'] = $this->kategori_m->get_kategori();
        $idkategori = $this->input->post('idkategori');
        $this->data['title'] = 'Kategori';
        $this->data['page'] = 'admin/kategori/kategori_v';
        $this->load->view('dashboard_v', $this->data);
    }
    public function pcsaddkat(){
                
         $post = $this->input->post();

         $data = array(
        'jdlkategori'       => $post['jdlkategori'],
        'katalias'     => strtolower(url_title($post['jdlkategori'])),
        'deskat'       => $post['deskat'],
        );

        $this->kategori_m->insert_kategori($data);
        redirect(base_url('admin/kategori'));
    }
    public function deletekat($id){
        if(!$this->account->validate_admin()){
            show_404();
        }else{
            $this->kategori_m->delete_kategori($id);
            redirect('admin/kategori','refresh');
        }
    }

    public function updatekategori(){
                
        $post = $this->input->post();

         $data = array(
        'jdlkategori'       => $post['jdlkategori'],
        'katalias'     => strtolower(url_title($post['jdlkategori'])),
        'deskat'       => $post['deskat'],
        );

        $id = $this->input->post('idkategori');
        $this->kategori_m->update_kategori ($id, $data);
                
        redirect(base_url('admin/kategori'));
    }

    public function detail() {
        $id = $this->input->post('idkategori');
        $kategori = $this->kategori_m->get_kategori_row($id);
        
        echo json_encode($kategori);
    }
}