<?php
class UserController extends ControllerBase
{

    public function indexAction()
    {
  
    } 

   public function delAction($id)
   {

      // Cari user berdasarkan ID
      $user = Users::findFirst($id);
      
      // Jika data tidak terhapus
      if (!$user->delete()){
         echo "Data gagal dihapus";
      }
      // Jika data dihapus
      else{
         $user->delete();
         $this->session->set('pesan-delete', 'Data berhasil dihapus');
         $this->response->redirect('/index');
      }
			
   } 
   public function updateAction($id=null)
   {
      
      // Ambil nilai ID dan Cari user berdasarkan ID
      $id = $this->request->getPost("id");
      $user = Users::findFirst($id);

      // Ambil data yang dimasukan ke dalam array
      $user->assign(array(
         'id' => $id,
         'nama' => $this->request->getPost('nama'),
         'alamat' => $this->request->getPost('alamat'),
         'email' => $this->request->getPost('email')

       )
      );

      // $user->update($this->request->getPost());
      // Jalankan fungsi update
      $success = $user->update();
        if ($success) {

            // Tampilkan pesan data session dan kembalikan ke form tambah data
            $this->session->set('pesan-update', 'Data berhasil diubah');
            return $this->response->redirect('/index');
        }

   }
 
}