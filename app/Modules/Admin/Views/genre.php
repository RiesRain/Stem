<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
  <h1>Genre</h1>
  <a href=<?= '/admin/genre/tambah' ?>>
    <button type="button" class="btn btn-outline-dark">Add</button>
  </a>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Genre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($genre as $row) : ?>
      <tr>
        <th scope="row"><?= $row['Id_genre'] ?></th>
        <td><?= $row['Nama_genre'] ?></td>
        <td>
          <a href="<?= '/admin/genre/delete/'. $row['Id_genre']?>">
            <button class="btn btn-danger">Hapus</button>
          </a>
          <a href="<?= '/admin/genre/ubah/'. $row['Id_genre']?>">
            <button class="btn btn-warning">Edit</button>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection('content') ?>