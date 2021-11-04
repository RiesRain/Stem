<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
  <h1>Publisher</h1>
  <h1></h1>
  <div class="containt">

  </div>
  <a href=<?= '/admin/publisher/tambah' ?>>
    <button type="button" class="btn btn-outline-dark">Add</button>
  </a>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Publisher</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($publisher as $row) : ?>
      <tr>
        <th scope="row"><?= $row['Id_publisher'] ?></th>
        <td><?= $row['Nama_publisher'] ?></td>
        <td>
          <a href="<?= '/admin/publisher/delete/'. $row['Id_publisher']?>">
            <button class="btn btn-danger">Hapus</button>
          </a>
          <a href="<?= '/admin/publisher/ubah/'. $row['Id_publisher']?>">
            <button class="btn btn-warning">Edit</button>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection('content') ?>