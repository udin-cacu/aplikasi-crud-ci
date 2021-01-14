<div class="container">

	<?php if( $this->session->flashdata('pesan') ) : ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data collection<strong> Success</strong> <?= $this->session->flashdata('pesan'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>			
		</div>
	</div>

	<?php endif; ?>


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?=site_url('collection/tambah')?>" class="btn btn-primary btn-sm">Add Data Collection</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="search for data collection.." name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-warning" type="submit">Search</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-8">
			<h3>List Of Collection</h3>
			<?php if( empty($collection) ) : ?>
				<div class="alert alert-danger" role="alert">
				  Data collection not found.
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($collection as $collect) : ?>
			  <li class="list-group-item"><?= $collect['nama']; ?>
			  	<a href="<?= base_url(); ?>collection/hapus/<?= $collect['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Sure to be deleted ?');">Delete</a>
			  	<a href="<?= base_url(); ?>collection/ubah/<?= $collect['id']; ?>" class="badge badge-success float-right">Update</a>
			  	<a href="<?= base_url(); ?>collection/detail/<?= $collect['id']; ?>" class="badge badge-primary float-right">Detail</a>
			  </li>
			  	<?php endforeach; ?>
			</ul>
		</div>
	</div>	



</div>