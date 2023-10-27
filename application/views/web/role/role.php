<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Role</h1>
                        <a href="<?=base_url('web/data_role/role/add');?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm " style="color: black; background-color: lightcyan"><i
                                class="fas fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

					<!-- 2. untuk membuat warna peringatan warna biru -->
					<?php if ($this->session->flashdata('primary')): ?>
						<div class="alert alert-primary" role="alert">
							<?= $this->session->flashdata('primary') ?>
						</div>
					<?php endif ?>

                    <div class="row">
                    	<div class="card col-sm-12">
                    		<div class="card-header">
                    			<label for="" class="card-tittle font-weight-bold" style="color: black">Data Role</label>
                    			</div>
                    			<div class="card-body" style="background-color: lightcyan">
                    				<div class="table-responsive">
                    					<table class="table table-boardered">
										<thead style="font-size: 13px; font-weight: bold; color: black">
                    							<tr>
												<th># <i class="fas fa-sort"></i></th>
												<th>Jabatan <i class="fas fa-sort"></i></th>
												<th>Aksi</th>
                    							</tr>
                    						</thead>
                    						<tbody>
											<?php $i=1 ;?>
                    							<?php foreach ($data as $datas) : ?>
                    								<tr style="font-size: 13px; color: black">
													<td><?= $i ?></td>
                    							<td><?= $datas->jabatan ?></td>
                    							<td>
                                                <a href="<?= base_url('web/data_role/role/edit/' . $datas->id_role) ?>"
                                                    class="btn btn-info btn-sm">Edit</a>
                                                <a href="<?= base_url('web/data_role/role/delete/' . $datas->id_role) ?>"
                                                    class="btn btn-danger btn-sm">Hapus</a>
                                                </td>
                    							</tr>
												<?php $i++;?>
                    							<?php endforeach ?>
                    						</tbody>
                    					</table>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                   
