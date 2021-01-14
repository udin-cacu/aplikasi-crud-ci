<div class="container">
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Update Data Collection</h3>
        </div>
        <div class="card-body">
         
          <form method="post" action="">
            <input type="hidden" name="id" value="<?= $collection['id']; ?>">
            <div class="form-group">
              <label for="nama">Item Name</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $collection['nama']; ?>">
              <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="kd_jenis">Item Code</label>
              <input type="text" class="form-control" id="kd_jenis" name="kd_jenis" value="<?= $collection['kd_jenis']; ?>">
              <small  class="form-text text-danger"><?= form_error('kd_jenis'); ?></small>
            </div>
            <div class="form-group">
              <label for="jenis">Item Type</label>
              <select class="form-control" id="jenis" name="jenis">
                <?php foreach( $jenis as $j) : ?>
                  <?php if( $j == $collection['jenis'] ) : ?>
                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                <?php else : ?>
                <option value="<?= $j; ?>"><?= $j; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah">Total</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $collection['jumlah']; ?>">
              <small  class="form-text text-danger"><?= form_error('jumlah'); ?></small>
            </div>
            <div class="form-group">
              <label for="harga">Price</label>
              <input type="text" class="form-control" id="harga" name="harga" value="<?= $collection['harga']; ?>">
              <small  class="form-text text-danger"><?= form_error('harga'); ?></small>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-right"> Update Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>