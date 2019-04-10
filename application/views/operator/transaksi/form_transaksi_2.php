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
				<div class="row">
					<div class="col-md-8">
						<div class="card mb-3">
					<div class="card-header">
						<h5>FORM Tambah Barang</h5>
					</div>
					<div class="card-body">
						<form action="<?php base_url('transaksi') ?>" method="post" enctype="multipart/form-data">
				            <div class="form-group">
				              <div class="form-row">
				                <div class="col-md-7">
				                    <input list="barang" name="barang" class="form-control" placeholder="Nama Barang" >
				                </div>
				                <div class="col-md-3">
				                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" >
				                </div>
				                <div class="col-md-2">
									<button class="btn btn-success" type="submit" name="submit_barang">Tambah</button>
								</div>
				              </div>
				            </div>
						</form>
					</div>
				</div>
					</div>


					<div class="col-md-4">
						<div class="card mb-3">
					<div class="card-header">
						<h5>Pilih Jenis Pembayaran</h5>
					</div>
					<div class="card-body">
						<form action="<?php base_url('transaksi') ?>" method="post" enctype="multipart/form-data">
				            <div class="form-group">
				              <div class="form-row">
				                <div class="col-md-4">
				                    <input type="radio" name="bayar" value="Tunai" 
		         						checked> Tunai<br>
				                </div>
				                <div class="col-md-4">
		  							<input type="radio" name="bayar" value="Piutang"> 
		         						Piutang<p>
				                </div>
				                <div class="col-md-4">
				                	<button class="btn btn-success" type="submit" name="submit_bayar">Pilih</button>
				                </div>
							
				              </div>
				            </div>
						</form>
					</div>
				</div>
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
								<th>Harga</th>
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
											<td>".number_format($d->harga)."</td>
											<td>".number_format($d->harga_ppn)."</td>
											<td>".number_format($d->jumlah*$d->harga_ppn)."</td>
											<td>".anchor('transaksi/hapus/'.$d->id_detailtrx,'hapus')."
											</td>
										  </tr>";
									$total = $total+($d->jumlah*$d->harga_ppn);
									$no++;
								}
							?>

							<tr>
								<td colspan="6"><p align="right">Total</p></td>
								<td><?php echo number_format($total);?></td>
								<td>
									<a class="btn btn-info" href="<?php echo site_url('transaksi/cetak_transaksi2')?>" target="_blank"><span class="fa fa-print"></span> Cetak</a>
									 <a class="btn btn-success" href="<?php echo site_url('transaksi/selesai')?>"><span class="fa fa-check"></span> Selesai</a>
									 <a class="btn btn-danger" href="<?php echo site_url('transaksi/batal')?>"><span class="fa fa-times"></span> Batal</a> 
								</td>
							</tr>
						</table>
						<table width="100%" border="0">
								<?php 
								foreach ($trx as $t) {
									if ($t->status_bayar == "Piutang") 
									{
										echo "<tr>
												<th>Status Pembayaran : $t->status_bayar</th>
										  	  </tr>
										  	  <tr>
										  	  <th>Mohon melunasi pembayaran dengan transfer ke rekening $t->rekening</th>
										  	  </tr>
										  	  <tr>
										  	  	<th>Nomor rekening : $t->no_rek</th>
										  	  </tr>";
									}
									else
									{
										echo "<tr>
												<th>Status Pembayaran : $t->status_bayar</th>
										  	  </tr>";
									}									
								}								
															
								?>
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