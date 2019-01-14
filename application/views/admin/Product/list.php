<div class="table-responsive">

<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($Product as $Product): ?>
								<tr>
									<td width="150">
										<?php echo $Product->product_id?>
									</td>
									<td>
										<?php echo $Product->name ?>
									</td>
									<td>
										<?php echo $Product->price ?>
									</td>
									<td>
										<?php echo $Product->image ?>
									</td>
									<td>
										<?php echo $Product->description?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
</div>