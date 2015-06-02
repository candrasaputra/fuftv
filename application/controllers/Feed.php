<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feed extends CI_Controller {
    public function __construct(){  
        parent::__construct();

        $this->load->helper(array('xml'));
        $this->load->model('feed_m');
    }

    public function index()
    {
 
       $this->data['feed_name'] = "<?php echo base_url();?>";

       $this->data['encoding'] = 'utf-8';

       $this->data['feed_url'] = "<?php echo base_url();?>feed";

       $this->data['page_language'] = 'en';

       $this->data['page_description'] = 'Live streeming anime channel';

       $this->data['creator_email'] = 'admin@fuftv.com';

       $this->data['query'] = $this->feed_m->get_feeds();

       header("Content-Type: application/rss+xml");

       $this->load->view('feed_v',$this->data);
    }
}
/*End of file feed.php*/
/*Location .application/controllers/feed.php*/