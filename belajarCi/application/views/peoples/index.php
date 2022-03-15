<div class="container">
	<h3 class="mt-3">List Of Peoples</h3>

	<div class="row">
		<div class="col-md-4">
			<form action="<?php echo base_url('peoples'); ?>" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search keyword..." name="keyword" autocomplete="off" autofocus>
				  <div class="input-group-append">
				    <input class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit">
				  </div>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-md">
			<h5>Results : <?php echo $total_rows; ?></h5>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if (empty($peoples)): ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
								 Data Not Found.
								</div>
							</td>
						</tr>
					<?php endif;?>
					<?php ;foreach ($peoples as $people): ?>
					<tr>
						<th><?php echo ++$start; ?></th>
						<td><?php echo $people['name']; ?></td>
						<td><?php echo $people['email']; ?></td>
						<td>
							<a href="" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</td>
					<?php endforeach;?>
					</tr>
				</tbody>
			</table>
			<?php echo $this->pagination->create_links(); ?>


		</div>
	</div>
</div>