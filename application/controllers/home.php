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

    public function edit($id = '')
    {
        if ($id) {
            $data['id'] = $id;
            $article = Article::find($id);
        }
        if ($article) {
            if ($this->input->post()) {
               $article->title = $this->input->post('title');
               $article->content = $this->input->post('content');
               $article->save();
            }
            $data['article'] = $article;
            $this->load->view('edit', $data);
        } else {
            show_404();
        }
    }

    public function add()
    {
        $article = new Article;
        $article->title = $this->input->post('title');
        $article->content = $this->input->post('content');
        $article->save();
        $this->load->view('add');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */