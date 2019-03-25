<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("operator/_partials/head.php") ?>
</head>
<body id="page-top" onload="setInterval('displayServerTime()', 1000);">
	<?php $this->load->view("operator/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("operator/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- <div class="card mb-3">
					<div class="card-header">
						<h5>FORM Kostumer</h5>
					</div>
					<div class="card-body">
						<form action="<?php base_url('transaksi') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
				              <div class="form-row">
				                <div class="col-md-6">
				                  <div class="form-label-group">
				                    <input type="text" name="nama_kostumer" id="nama_kostumer" class="form-control" placeholder="Nama Pelanggan" autofocus="autofocus">
				                    <label for="pelanggan">Nama Pelanggan</label>
				                  </div>
				                </div>
				                <div class="col-md-6">
				                  <div class="form-label-group">
				                    <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Kontak">
				                    <label for="kontak">Kontak</label>
				                  </div>
				                </div>
				              </div>
				            </div>            
				            <div class="form-group">
				              <div class="form-row">
				                <div class="col-md-3">
				                  <div class="form-label-group">
				                    <input type="text" id="provinsi" class="form-control" placeholder="Provinsi">
				                    <label for="provinsi">Provinsi</label>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-label-group">
				                    <input type="text" id="kota" class="form-control" placeholder="Kota">
				                    <label for="kota">Kota</label>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-label-group">
				                    <input type="text" id="kecamatan" class="form-control" placeholder="Kecamatan">
				                    <label for="kecamatan">Kecamatan</label>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-label-group">
				                    <input type="text" id="kode_pos" class="form-control" placeholder="Kode Pos">
				                    <label for="kode_pos">Kode Pos</label>
				                  </div>
				                </div>
				              </div>
				            </div>
				            <div class="form-group">
				            	<div class="form-row">
				            		<div class="col-md-8">
						              <div class="form-label-group">
						                <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap">
						                <label for="alamat_lengkap">Alamat Lengkap</label>
						              </div>
				              		</div>
				              		<div class="col-md-3">
					                  <div class="form-label-group">
					                    <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos">
					                    <label for="kode_pos">Kode Pos</label>
					                  </div>
					                </div>
					                <button class="btn btn-success" type="submit" name="submit_kostumer">Tambah</button>
				              	</div>
				            </div>
						</form>
					</div>
				</div> -->

				<div class="card mb-3">
					<div class="card-header">
						<h5>FORM Tambah Barang</h5>
					</div>
					<div class="card-body">
						<form action="<?php base_url('transaksi') ?>" method="post" enctype="multipart/form-data">
				            <div class="form-group">
				              <div class="form-row">
				                <div class="col-md-8">
				                    <input list="barang" name="barang" class="form-control" placeholder="Nama Barang" >
				                </div>
				                <div class="col-md-3">
				                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" >
				                </div>
							<button class="btn btn-success" type="submit" name="submit_barang">Tambah</button>
				              </div>
				            </div>
						</form>
					</div>
				</div>

				<div class="card mb-3">
					<div class="card-header">
						<h5>Detail Transaksi</h5>
					</div>
					<div class="card-body">
						
						<table width="100%" border="0">
						<?php 
                        $user = $this->session->userdata('username');
                        $tgl = date('d - M - y');
                            foreach ($det_kostumer as $dt) {
                                echo "
                                        <tr>
                                            <th width='200px'>Nomor Transaksi </th>
                                            <th>:</th>
                                            <th width='200px'>$dt->nomor_transaksi</th>
                                            <th>Kostumer </th>
                                            <th>:</th>
                                            <th width='300px'>$dt->nama_kostumer</th>
                                        </tr>
                                        <tr>
                                            <th width='200px'>Tanggal Transaksi </th>
                                            <th>:</th>
                                            <th width='200px'> $tgl</th>
                                            <th>Kontak </th>
                                            <th>:</th>
                                            <th width='300px'> $dt->kontak</th>
                                        </tr>
                                        <tr>
                                            <th width='200px'>Operator  </th>
                                            <th>:</th>
                                            <th width='200px'>$user</th>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <th width='500px'>$dt->alamat</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th ></th>
                                            <th></th>
                                            <th>Kode Pos</th>
                                            <th>:</th>
                                            <th width='300px'> $dt->kode_pos</th>
                                        </tr>";
                            }                           
                        ?>

                        </table>
						<p></p>
						<table class="table table-bordered" width="100%" cellspacing="0">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Satuan</th>
								<th>Jumlah</th>
								<th>Harga (Rp Kg/L)</th>
								<th>Harga + PPN</th>
								<th>Sub Total</th>
								<th width="300px">Operasi</th>
							</tr>
							<?php
								$no=1;
								$total=0;
								foreach ($detail as $d) {
									echo "<tr>
											<td>$no</td>
											<td>$d->nama_barang</td>
											<td>$d->nama_satuan</td>
											<td>$d->jumlah</td>
											<td>$d->harga</td>
											<td>$d->harga_ppn</td>
											<td>".$d->jumlah*$d->harga_ppn."</td>
											<td>".anchor('transaksi/hapus/'.$d->id_detailtrx,'hapus')."
											</td>
										  </tr>";
									$total = $total+($d->jumlah*$d->harga_ppn);
									$no++;
								}
							?>

							<tr>
								<td colspan="6"><p align="right">Total</p></td>
								<td><?php echo $total;?></td>
								<td>		
									<!-- <a class="btn btn-info" href="<?php echo site_url('transaksi/cetak_transaksi')?>" target="_blank"><span class="fa fa-print"></span> Cetak</a>
									<button class="btn btn-warning"><?php echo anchor('transaksi/selesai','Selesai'); ?></button>
									 <button class="btn btn-danger"><?php echo anchor('transaksi/batal','Batal'); ?></button> -->
									<a class="btn btn-info" href="<?php echo site_url('transaksi/cetak_halaman')?>" target="_blank"><span class="fa fa-print"></span> Cetak</a>
									 <a class="btn btn-success" href="<?php echo site_url('transaksi/selesai')?>"><span class="fa fa-check"></span> Selesai</a>
									 <a class="btn btn-danger" href="<?php echo site_url('transaksi/batal')?>"><span class="fa fa-times"></span> Batal</a> 
								</td>
							</tr>
						</table>
						<datalist id="barang">
							<?php
								foreach ($barang->result() as $b) {
									echo "<option value='$b->nama_barang'></option>";
								}
							 ?>
						</datalist>
						<datalist id="nama_kostumer">
							<?php
								foreach ($kostumer->result() as $k) {
									echo "<option value='$k->nama_kostumer'></option>";
								}
							 ?>
						</datalist>
					</div>
				</div>
				
				<!-- /.container-fluid-->

				<!-- Sticky Footer-->
				<?php $this->load->view('operator/_partials/footer.php') ?>
			</div>
			<!-- /.content-wrapper-->
		</div>
		<!-- /#wrapper-->

	</div>
	<?php $this->load->view('operator/_partials/scrolltop.php') ?>
	<?php $this->load->view('operator/_partials/js.php') ?>
</body>
</html>