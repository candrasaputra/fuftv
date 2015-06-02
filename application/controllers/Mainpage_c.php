<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainpage_c extends CI_Controller {
	public function __construct()
    {
        parent:: __construct();
        date_default_timezone_set("Asia/Jakarta");

        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
      	('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
    	$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
    	$this->output->set_header();

		$this->load->model('main_m');
		$this->load->library('timeago');
		$this->pbj();
	}

	public function index()
	{
		//untuk facebook plugin
		$data['title'] = 'Streaming dan download film kesukaan kamu di FUFTV';
		$data['url'] = '';
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = 'Situs streaming film yang meliputi bok opis, film asia dan barat yang dapat kamu donlot sekalian';
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['postertop'] = $this->main_m->tontonanpopuler();
		$data['disarankan'] = $this->main_m->disarankan_m();
		$data['latsupdate'] = $this->main_m->latsupdate();
		// echo '<pre>';print_r($this->main_m->get_kategori_with_content(1, 6));exit;
		$kategori = $this->main_m->get_kategori();
		foreach ($kategori as $k => $value) {
			$cat_con[$value->idkategori] = $this->main_m->get_kategori_with_content($value->idkategori, 6);
		}
		$data['kategori'] = $kategori;
		$data['kategoriIsi'] = $cat_con;
		$data['gettag'] = $this->main_m->get_tag();
		$data['tag'] = 'Yutub aja kaga cukup.';
		$data['page'] = 'main';
		$this->load->view('mainpage_v', $data);
	}

	public function daftarfilm()
	{
		//untuk facebook plugin
		$data['title'] = 'Daftar Film';
		$data['url'] = 'daftarfilm';
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = 'kumpulan film yang telah diupload';
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['daftar'] = $this->main_m->get_daftarfilm();
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['postertop'] = $this->main_m->tontonanpopuler();
		$data['saraneps'] = $this->main_m->disarankan_m();
		$data['page'] = 'daftarfilm';
		$this->load->view('mainpage_v', $data);
	}

	public function daftarfilmbykategori($idkategori)
	{
		//untuk facebook plugin
		$data['title'] = "Daftar ".$this->main_m->get_daftarfilmbykategori_row($idkategori)->row('jdlkategori');
		$data['url'] = 'Mainpage_c/daftarfilmbykategori/'.$this->main_m->get_daftarfilmbykategori_row($idkategori)->row('idkategori');;
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = "sorting film berdasarkan kategori ".$this->main_m->get_daftarfilmbykategori_row($idkategori)->row('jdlkategori');
		// $u = $this->main_m->get_daftarfilmbykategori_row($idkategori);
		// $data['keywords'] =$u->row('jdlkategori');
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['daftar'] = $this->main_m->get_daftarfilmbykategori($idkategori);
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['postertop'] = $this->main_m->tontonanpopuler();
		$data['saraneps'] = $this->main_m->disarankan_m();
		$data['page'] = 'daftarfilm';
		$this->load->view('mainpage_v', $data);
	}

	public function disarankan()
	{
		$config = array();
        $config["base_url"] = base_url() . "mainpage_c/disarankan";
        $config["total_rows"] = $this->main_m->count_episode();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;

        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();

		//untuk facebook plugin
		$data['title'] = 'Disarankan untuk ditonton';
		$data['url'] = 'disarankan';
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = 'Saran dari para penonton lain';
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['allsaran'] = $this->main_m->get_all_saran($config["per_page"], $page);
		$data['page'] = 'saran';
		$this->load->view('mainpage_v', $data);
	}
	public function lastupdate()
	{
		$config = array();
        $config["base_url"] = base_url() . "mainpage_c/lastupdate";
        $config["total_rows"] = $this->main_m->count_episode();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;

        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        
		//untuk facebook plugin
		$data['title'] = 'Updatetan terakhir';
		$data['url'] = 'updatetanterakhir';
		$data['image'] = 'asset/img/brand.png';
		$data['gettag'] = $this->main_m->get_tag();
		$data['deskripsi'] = 'Updatetan terakhir';
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['allsaran'] = $this->main_m->getlatsupdate($config["per_page"], $page);
		$data['kategori'] = $this->main_m->get_kategori();
		
		$data['page'] = 'saran';
		$this->load->view('mainpage_v', $data);
	}

	public function kategori($alias)
	{
		$data['idkategori'] = $this->main_m->get_listkat_by_alias($alias)->row('idkategori');
		$config = array();
        $config["base_url"] = base_url() . "mainpage_c/kategori/$alias";
        $config["total_rows"] = $this->main_m->count_bykat_episode($data['idkategori']);
        $config["per_page"] = 24;
        $config["uri_segment"] = 4;

        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();

		//untuk facebook plugin
		$data['title'] = "Kategori ".$this->main_m->get_listkat_by_alias($alias)->row('jdlkategori');
		$data['url'] = 'Mainpage_c/kategori/'.$this->main_m->get_listkat_by_alias($alias)->row('katalias');
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] ="Yang baru di ".$data['title'];
		$data['keywords'] ="fuftv streaming, download,gratis, ".$this->main_m->get_listkat_by_alias($alias)->row('jdlkategori').",subtitle indonesia";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['allsaran'] = $this->main_m->get_listkat_by_idkat($config["per_page"], $page, $data['idkategori']);
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['page'] = 'saran';
		$this->load->view('mainpage_v', $data);
	}
	public function tag($alias)
	{
		//untuk facebook plugin
		$judul = $this->main_m->get_tagname_by_alias($alias);
		$data['title'] = "Daftar film ".$judul->jdltag;
		$data['url'] = 'Mainpage_c/tag';
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = $judul->destag;
		$data['keywords'] ="fuftv streaming,tag,film,".$judul->jdltag;

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['daftar'] = $this->main_m->get_listag_by_alias($alias);
		// echo '<pre>';print_r($this->main_m->get_listag_by_alias($alias));exit;
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['postertop'] = $this->main_m->tontonanpopuler();
		$data['saraneps'] = $this->main_m->disarankan_m();
		$data['page'] = 'daftarfilm';
		$this->load->view('mainpage_v', $data);
	}

	public function detailfilm($detail)
	{
		$countcek = @$this->main_m->get_cek_film($detail)->row();
		if (count($countcek) > 0) {
			$infilm = $this->main_m->get_idfilmbyalias($detail);
			$this->main_m->updateHitsFilm($infilm->idfilm);
			$data['listepisode'] = $this->main_m->get_episode_film($infilm->idfilm);
			$data['jmlmenontonini'] = $this->main_m->get_cek_film($detail)->row('filmview');

			$this->db->cache_on();
			$data['filmbaru'] = $this->main_m->fufmain();
			$data['postertop'] = $this->main_m->tontonanpopuler();
			$data['asda'] = $this->main_m->get_detailfilm($detail);
			$data['kategori'] = $this->main_m->get_kategori();
			$data['gettag'] = $this->main_m->get_tag();
			$idkat = $data['asda']->idkategori;
			$data['serupa'] = $this->main_m->serupa_for_film_m($idkat);
			$data['title'] = $this->main_m->get_tittle($detail)->row('jdlfilm');
			$data['url'] = 'film/'.$data['asda']->alias;
			$data['image'] = 'asset/img/poster/'.$data['asda']->posterfilm;
			$data['deskripsi'] = $data['asda']->deskripsifilm;
			$data['keywords'] ="fuftv streaming, nonton online, download, ".$data['asda']->jdlfilm.", ".$data['asda']->jdlkategori;
			$data['page'] = 'detailfilm';
			$this->load->view('mainpage_v', $data);
		} else {
			$this->load->view('errors/error');
		}
	}

	public function post($getposteps)
	{
		$countcek = @$this->main_m->get_cek_episode($getposteps)->row();
		if (count($countcek) > 0) {
			$idfilm = $countcek->idfilm;
			$this->main_m->updateHitsFilm($idfilm);
			$this->main_m->updateHits($getposteps);
			$data['cc'] = $this->main_m->get_cek_episode($getposteps)->row('epsview');

			$this->db->cache_on();
			$data['getpost'] = $this->main_m->get_row_episode($getposteps)->row();
			$data['filmbaru'] = $this->main_m->fufmain();
			$data['tontonanlainnya'] = $this->main_m->get_episode_lainnya($idfilm);
			$data['getkategori'] = $this->main_m->get_detail_film($idfilm);
			$kat = $this->main_m->get_detail_film($idfilm);
			$idkat = $kat->idkategori;
			$data['kategori'] = $this->main_m->get_kategori();
			$data['gettag'] = $this->main_m->get_tag();
			$data['disarankan'] = $this->main_m->disarankan_m();
			$data['serupa'] = $this->main_m->serupa_m($idkat);
			$data['idepisodesaatini'] = $getposteps;
			$getideps = $data['getpost']->idepisode;
			//untuk facebook plugin
			$data['keywords'] ="fuftv,".$data['getpost']->jdlfilm.','.$data['title'] = $data['getpost']->jdleps;
			$data['title'] = $data['getpost']->jdlfilm.' '.$data['title'] = $data['getpost']->jdleps." Subtitle Indonesia";
			$data['deskripsi'] = $data['getpost']->deskripsifilm;
			$data['url'] = "post/".$data['getpost']->epsalias;
			$data['image'] = 'asset/img/epsimage/'.$data['getpost']->imgeps;
			$data['keywords'] ="fuftv streaming, nonton online, download, ".$data['getpost']->jdlfilm.", ".$data['getpost']->jdleps.", Subtitle Indonesia";

			$data['linkstreaming'] = $this->main_m->get_linkstreaming($idfilm, $getideps);
			$data['linkdownload'] = $this->main_m->get_linkdownload($idfilm, $getideps);
			$data['page']='post';

			$this->load->view('mainpage_v', $data);
		} else {
			$this->load->view('errors/error');
		}
	}
	
	public function tontonanpopuler()
	{
		$config = array();
        $config["base_url"] = base_url() . "mainpage_c/tontonanpopuler";
        $config["total_rows"] = $this->main_m->count_film();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();

		//untuk facebook plugin
		$data['title'] = 'Tontonan Populer';
		$data['url'] = 'tontonanpopuler';
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = 'Film dengan jumlah penonton terbanyak';
		$data['keywords'] ="fuftv streaming, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis ";

		$data['filmbaru'] = $this->main_m->fufmain();
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['daftar'] = $this->main_m->tontonanpopuler2($config["per_page"], $page);
		$data['disarankan'] = $this->main_m->disarankan_m();
		$data['page'] = 'film';
		$this->load->view('mainpage_v', $data);

	}

	public function reqfilm(){
		$post = $this->input->post();
		$reqfilm = array(
			'isireqfilm'       => strip_tags($post['isireqfilm']),
			);

		$save = $this->main_m->reqfilm($reqfilm);
		$this->session->set_flashdata('message', 'Film yang anda Request berhasil dikirim :D');

		redirect();
		//header('location: '.base_url().'requestfilm');
	}

	public function search(){
		$cariini = $this->input->get('cari');
		$data['hasilsearch'] = $this->main_m->search($cariini);
		$data['disarankan'] = $this->main_m->disarankan_m();
		$data['filmbaru'] = $this->main_m->fufmain();
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['url'] = 'mainpage_c/search.html?cari='.$cariini;
		$data['image'] = 'asset/img/brand.png';
		$data['deskripsi'] = "Pencarian untuk film terkait...";
		$data['keywords'] ="fuftv streaming,pencarian, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis ";
		if (!empty($cariini)) {
			$data['title'] = "Hasil pencarian untuk $cariini";
		} else {
			$data['title'] = "Semua Film";
		}
		$data['page'] = 'cari_v';
		$this->load->view('mainpage_v', $data);
	}
	public function genres(){
		$data['filmbaru'] = $this->main_m->fufmain();
		$data['kategori'] = $this->main_m->get_kategori();
		$data['gettag'] = $this->main_m->get_tag();
		$data['image'] = 'asset/img/brand.png';
		$data['url'] = 'Mainpage_c/genres';
		$data['title'] = "Tag / Genre";
		$data['tag'] = $this->main_m->get_all_tag();
		$data['deskripsi'] = "Pencarian untuk film terkait...";
		$data['keywords'] ="fuftv streaming,pencarian, anime, movie, box-office, k-drama,j-drama, subtitle indonesia, gratis ";
		$data['postertop'] = $this->main_m->tontonanpopuler();
		$data['saraneps'] = $this->main_m->disarankan_m();
		$data['page'] = 'genres_v';

		// echo '<pre>';print_r($this->main_m->filter_by_tag());exit;
		$data['filter_tag'] = $this->main_m->filter_by_tag();
		$this->load->view('mainpage_v', $data);
	}
	private function pbj(){
		$list = $this->main_m->list_episode_berjadwal();
    	if (!empty($list)) {
    		foreach ($list as $key) {
    			if ($key->timeepisode<date("Y-m-d H:i:s")) {

		    		$data['visibility'] = "publish";
			        $idepisode=$key->idepisode;

			        $this->main_m->update_episode($idepisode, $data);
		    	}
    		}
    	}
	}
}