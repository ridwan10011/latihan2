<?php

use Phalcon\Mvc\Controller;

class EditController extends ControllerBase
{
    public function indexAction()
    {

    }
    public function editAction($id)
    {
        // Cari user berdasarkan ID di db
     $user = Users::findFirst($id);


     // Simpan data yang ada ke view
     $this->view->id = $user->id;
     $this->view->nama = $user->nama;
     $this->view->alamat = $user->alamat;
     $this->view->email = $user->email;
    } 
}