<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // Cari semua data / sama dengan SELECT * FROM nama_tabel
        $data_user = Users::find();
    	
        // Masukan ke view dengan variabel data user untuk digunakan di .volt
        $this->view->data_user=$data_user;


    }

}