<div class="container">
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    <center><h3>Detail Collection</h3></center>
			  </div>
			  <div class="card-body">
			  	<center>
			    <h5 class="card-title"><?= $collection['nama']; ?></h5>
			    <p class="card-text">Item Code : <?= $collection['kd_jenis']; ?></p>
			    <p class="card-text">Item Type : <?= $collection['jenis']; ?></p>
			    <p class="card-text">Total : <?= $collection['jumlah']; ?></p>
			    <p class="card-text">Price : <?= $collection['harga']; ?></p>
			    <a href="<?= base_url() ?>collection" class="btn btn-secondary">Go Back</a>
			    </center>
			  </div>
			</div>
		</div>
	</div>
</div>