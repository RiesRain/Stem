<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class GameModel extends Model
{
    protected $table      = 'game';
    protected $primaryKey = 'Id_game';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['Nama_game','Sinopsis_game','Rilis_game','Gambar_game','Id_publisher','Id_genre'];

    public function getGame()
    {
        return $this
            ->join('genre', 'game.Id_genre = genre.Id_genre')
            ->join('publisher', 'game.Id_publisher = publisher.Id_publisher')
            ->paginate(3,'game');            
    }
    
}