public function daftarfilm()
	{
        $data['filmbaru'] = $this->main_m->fufmain();
    	$data['daftar'] = $this->main_m->get_daftarfilm();
        $data['title'] = 'Daftar Film';
        $data['page'] = 'daftarfilm';
        $this->load->view('mainpage_v', $data);

    }