<div class="table-responsive">

    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Telepon</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $karyawan->id_karyawan ?>
										</td>
                                        <td>
                                            <?php echo $karyawan->nama_karyawan ?>
										</td>
                                        <td>
                                            <?php echo $karyawan->alamat_karyawan ?>
										</td>
                                        <td>
                                            <?php echo $karyawan->telp_karyawan ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
</div>
							