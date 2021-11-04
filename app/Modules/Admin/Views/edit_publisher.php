<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
    <h1>Edit Publisher</h1>
</div>

<form method="POST" action="<?= base_url( 'admin/publisher/reedit/') . '/' . $publisher['Id_publisher']  ?>">
  <div class="form-group mt-5">
    <label for="Nama">Nama Publisher</label>
    <input type="text" name="Nama_publisher" value="<?= $publisher['Nama_publisher'] ?>" class="form-control" id="Nama" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection('content') ?>