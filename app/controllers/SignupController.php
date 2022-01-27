<?php

use Phalcon\Mvc\Controller;
use Phalcon\Session\Factory;

class SignupController extends ControllerBase
{
    public function indexAction()
    {


    }
    public function registerAction()
    {
        // Inisialisasi db
        $user = new Users();

        // Masukan hasil ke value dalam bentuk array
        $user->assign(array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email')

          )
      );


        // Jika hasil simpan data sukses maka        
        $success = $user->save();
        if ($success) {

            // Tampilkan pesan data session dan kembalikan ke form tambah data
            $this->session->set('pesan-create', 'Data berhasil ditambahkan');
            return $this->response->redirect('/signup');
            
        } else {
            return $this->response->redirect('/signup');
        }
        
    }

}