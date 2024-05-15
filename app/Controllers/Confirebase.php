<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Firebase\Firebase;

class Confirebase extends BaseController
{
    public function index()
    {
        $fb = Firebase::initialize('https://fir-ku-5a6ba-default-rtdb.firebaseio.com/', 'AIzaSyD4d14VOFuRYuHLu5RToTvwPHvdxV31860');
        $data['notes'] = $fb->get('/notes');
        return view('index', $data);
    }

    public function add_data()
    {
        $fb = Firebase::initialize('https://fir-ku-5a6ba-default-rtdb.firebaseio.com/', 'AIzaSyD4d14VOFuRYuHLu5RToTvwPHvdxV31860');
        $d = [
            "judul" => $this->request->getPost('judul'),
            "peserta" => $this->request->getPost('peserta'),
        ];
        $a = $fb->push('/notes', $d);
        return redirect()->to(site_url('confirebase/index'));
    }

    public function update_data()
    {
        $key = $this->request->getPost("key");
        $fb = Firebase::initialize('https://fir-ku-5a6ba-default-rtdb.firebaseio.com/', 'AIzaSyD4d14VOFuRYuHLu5RToTvwPHvdxV31860');
        $d = [
            "judul" => $this->request->getPost('judul'),
            "peserta" => $this->request->getPost('peserta'),
        ];
        $a = $fb->update('/notes/' . $key, $d);
        return redirect()->to(site_url('confirebase/index'));
    }

    public function delete_data()
    {
        $key = $this->request->getGet("key");
        $fb = Firebase::initialize('https://fir-ku-5a6ba-default-rtdb.firebaseio.com/', 'AIzaSyD4d14VOFuRYuHLu5RToTvwPHvdxV31860');
        $a = $fb->delete('/notes/' . $key);
        return redirect()->to(site_url('confirebase/index'));
    }
}
