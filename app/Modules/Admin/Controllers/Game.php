<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

use App\Modules\Admin\Models\GameModel;
use App\Modules\Admin\Models\GenreModel;
use App\Modules\Admin\Models\PublisherModel;

class Game extends BaseController
{
    public function index()
    {
        $game = new GameModel();
        $dataGame =[
            'game' => $game->getGame(),
            'pager' => $game->pager
        ];
        return view('App\Modules\Admin\Views\game', $dataGame);
    }
    public function tambah(){
        $genre = new GenreModel();
        $publisher = new PublisherModel();

        $data['genre'] = $genre->findAll();
        $data['publisher'] = $publisher->findAll();

        return view('App\Modules\Admin\Views\tambah_game', $data);
    }

    public function add()

    {
        $Gambar_game = $this->request->getFile('Gambar_game');
        $Gambar_game->move('img');
        $Nama_game = $Gambar_game->getName();

        $game = new GameModel();
        $game->save([
            'Nama_game' => $this->request->getPost('Nama_game'),
            'Sinopsis_game'=> $this->request->getPost('Sinopsis_game'),
            'Rilis_game'=> $this->request->getPost('Rilis_game'),
            'Gambar_game'=> $Nama_game,
            'Id_genre' => $this->request->getPost('Id_genre'),
            'Id_publisher' => $this->request->getPost('Id_publisher')
        ]);

        return redirect()->to('/admin/game/index');
    }

    public function create(){
        $game = new GameModel();
        $game ->save([
            'Nama_game' => $this->request->getPost('Nama_game')
        ]);

        return redirect()->to('/admin/game');
    }
    public function delete($Id_game){
        $game = new GameModel();

        $game->delete($Id_game);

        return redirect()->to('/admin/game');
    }

    public function reedit($Id_game){
        $game = new GameModel();
        $game_game = $game->find($Id_game);

        if(!$game_game) return redirect()->to('/admin/game');

        $game->update($Id_game, [
            'Nama_game' => $this->request->getPost('Nama_game'),
            'Sinopsis_game'=> $this->request->getPost('Sinopsis_game'),
            'Rilis_game'=> $this->request->getPost('Rilis_game'),
            'Id_genre' => $this->request->getPost('Id_genre'),
            'Id_publisher' => $this->request->getPost('Id_publisher')
        
        ]);

        return redirect()->to('/admin/game/index');
    }

    public function ubah($Id_game){
        $game = new GameModel();
        $genre = new GenreModel();
        $publisher = new PublisherModel();

        $data['game'] = $game->find($Id_game);
        $data['genre'] = $genre->findAll();
        $data['publisher'] = $publisher->findAll();
        if(!$data['game']) return redirect()->to('/admin/game');
        return view('App\Modules\Admin\Views\edit_game', $data);
    }
}
