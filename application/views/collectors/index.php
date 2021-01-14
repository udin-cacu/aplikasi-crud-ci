<div class="container">
	<h3 class="mt-3">List Of Collector</h3>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url('collectors'); ?>" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="search for data collector.." name="keyword" autocomplete="off" autofocus>
				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="submit">
				  </div>
				</div>
			</form>
		</div>
	</div

	<div class="row">
		<div class="col-md-10">
			<h5 class="mt-3">Result : <?= $total_rows; ?></h5>
			<table class="table mt-3">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($collectors)) : ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
								  data not found!
								</div>								
							</td>
						</tr>
					<?php endif; ?>

					<?php foreach( $collectors as $coll) : ?>
					<tr>
						<th><?= ++$start; ?></th>
						<td><?= $coll['nama']; ?></td>
						<td><?= $coll['email']; ?></td>
						<td>
							<a href="<?= base_url(); ?>collectors/detail/<?= $coll['id']; ?>" class="badge badge-warning">Detail</a>
							<a href="" class="badge badge-success">Update</a>
							<a href="" class="badge badge-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<?= $this->pagination->create_links(); ?>

		</div>
	</div>
</div>									