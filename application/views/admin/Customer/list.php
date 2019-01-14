<div class="table-responsive">

    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Customer as $Customer): ?>
									<tr>
										<td width="150">
											<?php echo $Customer->customer_id ?>
										</td>
                                        <td>
                                            <?php echo $Customer->name ?>
										</td>
                                        <td>
                                            <?php echo $Customer->address ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
</div>