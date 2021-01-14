<div class="container">
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Add Data Collection</h3>
        </div>
        <div class="card-body">
         
          <form method="post" action="">
            <div class="form-group">
              <label for="nama">Item Name</label>
              <input type="text" class="form-control" id="nama" name="nama">
              <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="kd_jenis">Item Code</label>
              <input type="text" class="form-control" id="kd_jenis" name="kd_jenis">
              <small  class="form-text text-danger"><?= form_error('kd_jenis'); ?></small>
            </div>
            <div class="form-group">
              <label for="jenis">Item Type</label>
              <select class="form-control" id="jenis" name="jenis">
                <option value="">- Pilih -</option>
                <option value="Barang Langka">Barang Langka</option>
                <option value="Barang Antik">Barang Antik</option>
                <option value="Barang Sejarah">Barang Sejarah</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah">Total</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah">
              <small  class="form-text text-danger"><?= form_error('jumlah'); ?></small>
            </div>
            <div class="form-group">
              <label for="harga">Price</label>
              <input type="text" class="form-control" id="harga" name="harga">
              <small  class="form-text text-danger"><?= form_error('harga'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right"> Add Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>