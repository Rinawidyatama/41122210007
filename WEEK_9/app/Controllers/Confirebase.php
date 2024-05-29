<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Firebase\Firebase;

class Confirebase extends BaseController
{
    public function index()
    {
        $fb = Firebase::initialize('https://fir-ku-5a6ba-default-rtdb.firebaseio.com/', 'AIzaSyD4d14VOFuRYuHLu5RToTvwPHvdxV31860');
        $a = $fb->get('/notes');
        echo json_encode($a);
    }
}
