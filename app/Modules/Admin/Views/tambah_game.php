<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
    <h1>Add Game</h1>
</div>

<form method="POST" action="<?= base_url('admin/game/add') ?>" enctype="multipart/form-data">
    <div class="form-group mt-5">
        <label for="Nama">Nama Game</label>
        <input type="text" name="Nama_game" class="form-control" id="Nama" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
        <label for="hargaB">Sinopsis Game</label>
        <input type="text" name="Sinopsis_game" class="form-control" id="Sinopsis" required placeholder="minimal 10 kata">
    </div>
    
    <div class="form-group">
        <label for="hargaB">Rilis Game</label>
        <input type="date" name="Rilis_game" class="form-control" id="Rilis" >
    </div>

    <div class="form-group">
        <label for="hargaB">Gambar Game</label>
        <input type="file" name="Gambar_game" class="form-control" id="Gambar">
    </div>

    <div class="form-group">
        <label for="jenis">Genre</label>
        <select class="form-control" name="Id_genre" id="genre">
            <?php foreach ($genre as $row) : ?>
                <option value="<?= $row['Id_genre'] ?>"><?= $row['Nama_genre'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="merk">Publisher</label>
        <select class="form-control" name="Id_publisher" id="publisher">
            <?php foreach ($publisher as $row) : ?>
                <option value="<?= $row['Id_publisher'] ?>"><?= $row['Nama_publisher'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

   

    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?= $this->endSection('content') ?>