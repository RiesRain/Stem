<?= $this->extend('App\Modules\Admin\Views\layout') ?>

<?= $this->section('content') ?>

<div class='d-flex justify-content-between mt-5'>
    <h1>Edit Genre</h1>
</div>

<form method="POST" action="<?= base_url( 'admin/genre/reedit/') . '/' . $genre['Id_genre']  ?>">
  <div class="form-group mt-5">
    <label for="Nama">Nama Genre</label>
    <input type="text" name="Nama_genre" value="<?= $genre['Nama_genre'] ?>" class="form-control" id="Nama" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection('content') ?>