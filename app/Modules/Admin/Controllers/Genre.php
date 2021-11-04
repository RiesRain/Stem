<?php

namespace App\Modules\Admin\Controllers;
use App\Controllers\BaseController;
use App\Modules\Admin\Models\GenreModel;

class Genre extends BaseController
{
    public function index()
    {
        $genre = new GenreModel();

        $data['genre'] = $genre->findAll();

        return view('App\Modules\Admin\Views\genre',$data);
    }
    public function tambah(){
        return view('App\Modules\Admin\Views\tambah_genre');
    }
    public function create(){
        $genre = new GenreModel();
        $genre ->save([
            'Nama_genre' => $this->request->getPost('Nama_genre')
        ]);

        return redirect()->to('/admin/genre');
    }
    public function delete($Id_genre){
        $genre = new GenreModel();

        $genre->delete($Id_genre);

        return redirect()->to('/admin/genre');
    }

    public function reedit($Id_genre){
        $genre = new GenreModel();
        $genre_game = $genre->find($Id_genre);

        if(!$genre_game) return redirect()->to('/admin/genre');

        $genre->update($Id_genre, [
            'Nama_genre' => $this->request->getPost('Nama_genre')
        ]);

        return redirect()->to('/admin/genre');
    }

    public function ubah($Id_genre){
        $genre = new GenreModel();

        $data['genre'] = $genre->find($Id_genre);
        if(!$data['genre']) return redirect()->to('/admin/genre');
        return view('App\Modules\Admin\Views\edit_genre', $data);
    }
}
