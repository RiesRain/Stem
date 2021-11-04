<?php 


namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;
use App\Modules\Auth\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        //==============================
        $userModel = new UserModel();

        $data = $this->request->getPost();

        $User = $userModel->where('Nick_user', $data['Nick_user'])->first();

        if (!$User) {

            session()->setFlashdata('pesan', 'Username tidak ada');
            return redirect()->to('/');
        }

        if (sha1($data['Pass_user']) !== $User['Pass_user']) {
            session()->setFlashdata('pesan', 'Password salah');
            return redirect()->to('/');
        }
        //
            $sessLogin = [
                'login' => TRUE,
            ];
            session()->set($sessLogin);
            
            return redirect()->to('/admin/game');
            
    }
    public function logout(){
    session()->destroy();
        return redirect()->to('/');
    }
    public function register(){
        $regis = new UserModel();
        $regis ->save([
            'Nama_user' => $this->request->getPost('Nama_user'),
            'Pass_user' => sha1($this->request->getPost('Pass_user')),
            'Nick_user' => $this->request->getPost('Nick_user')
            
        ]);
        

        return redirect()->to('/');
    }
}

?>