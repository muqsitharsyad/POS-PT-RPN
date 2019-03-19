

<!DOCTYPE html>
<html lang="en">
  <head>
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('');?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  </head>

  <body>

    <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">POS PT RPN</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="#">Transaksi</a></li>
            <li><a href="#">Kostumer</a></li>
            <li><a href="#">Alamat</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="">Keluar</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
 
</div><!-- /.container-fluid -->

	<main role="main" class="container">
			<h3>Kategori Barang</h3>
	<?php 
		echo anchor('kategori/tambah','Tambah Data',array('class'=>'btn btn-danger btn-sm'));
	?>
	<p></p>
		<table class="table tableborder">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th colspan="2">Operasi</th>
			</tr>
			<?php
			$no = 1;
			foreach ($record->result() as $r) 
			{
				echo "<tr>
						<td width='10'>$no</td>
						<td>$r->nama_kategori</td>
						<td width='10'>".anchor('kategori/ubah/'.$r->id_kategori,'Ubah')."</td>
						<td width='10'>".anchor('kategori/hapus/'.$r->id_kategori,'Hapus')."</td>
					</tr>";
					$no++;
			}
			?>
		</table>
	</main>
  </body>
</html>

