<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Models\PublisherModel;

class Publisher extends BaseController
{
    public function index()
    {
        $publisher = new PublisherModel();

        $data['publisher'] = $publisher->findAll();

        return view('App\Modules\Admin\Views\publisher',$data);
    }
    public function tambah(){
        return view('App\Modules\Admin\Views\tambah_publisher');
    }
    public function create(){
        $publisher = new PublisherModel();
        $publisher ->save([
            'Nama_publisher' => $this->request->getPost('Nama_publisher')
        ]);

        return redirect()->to('/admin/publisher');
    }
    public function delete($Id_publisher){
        $publisher = new PublisherModel();

        $publisher->delete($Id_publisher);

        return redirect()->to('/admin/publisher');
    }

    public function reedit($Id_publisher){
        $publisher = new PublisherModel();
        $publisher_game = $publisher->find($Id_publisher);

        if(!$publisher_game) return redirect()->to('/admin/publisher');

        $publisher->update($Id_publisher, [
            'Nama_publisher' => $this->request->getPost('Nama_publisher')
        ]);

        return redirect()->to('/admin/publisher');
    }

    public function ubah($Id_publisher){
        $publisher = new PublisherModel();

        $data['publisher'] = $publisher->find($Id_publisher);
        if(!$data['publisher']) return redirect()->to('/admin/publisher');
        return view('App\Modules\Admin\Views\edit_publisher', $data);
    }
}
