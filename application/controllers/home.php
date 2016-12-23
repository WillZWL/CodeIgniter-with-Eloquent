<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {

        $data['articles'] = Article::all();

        $this->load->view('list', $data);
    }

    public function detail($id)
    {

        $data['article'] = Article::find($id);

        $this->load->view('detail', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */