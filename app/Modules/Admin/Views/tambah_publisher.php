<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
    <h1>Add Publisher</h1>
</div>

<form method="POST" action="<?= base_url( 'admin/publisher/create') ?>">
  <div class="form-group mt-5">
    <label for="Nama">Nama Publisher</label>
    <input type="text" name="Nama_publisher" class="form-control" id="Nama" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

<?= $this->endSection('content') ?>