<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
    <h1>Game</h1>
    <a href=<?= '/admin/game/tambah' ?>>
        <button type="button" class="btn btn-outline-dark">Add</button>
    </a>

</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Game</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Rilis</th>
            <th scope="col">Gambar</th>
            <th scope="col">Genre</th>
            <th scope="col">Publisher</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($game as $row) : ?>
            <?php $id = $row['Id_game']. $row['Id_genre']. $row['Id_publisher'] ?>
            <tr>
                <th scope="row"><?= $row['Id_game'] ?></th>
                <td><?= $row['Nama_game'] ?></td>
                <td><?= $row['Sinopsis_game'] ?></td>
                <td><?= $row['Rilis_game'] ?></td>
                <td><img src="<?= base_url('img/' . $row['Gambar_game']) ?>"  class="Gambar" width="50px"></td>
                <td><?= $row['Nama_genre'] ?></td>
                <td><?= $row['Nama_publisher'] ?></td>
                <td>
                    <a href="<?= '/admin/game/delete/' . $row['Id_game'] ?>">
                        <button class="btn btn-danger">Hapus</button>
                    </a>
                    <a href="<?= '/admin/game/ubah/' . $row['Id_game'] ?>">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="pagination justify-content-center mb-4">
    <?= $pager->links('game', 'bootstrap_pagination') ?>
</div>

<?= $this->endSection('content') ?>