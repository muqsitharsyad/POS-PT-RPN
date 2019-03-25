<html>
<head>
    <title>Invoice Transaksi</title>
    <?php $this->load->view("operator/_partials/head.php") ?>
    <?php $this->load->view("operator/_partials/kop_surat.php") ?>
</head>
<body>
<h3 style="text-align: center;">.:Invoice Transaksi:.</h3>       
            <div class="">
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
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Harga (Rp Kg/L)</th>
                                <th>Harga + PPN</th>
                                <th>Sub Total</th>
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
                                            </td>
                                          </tr>";
                                    $total = $total+($d->jumlah*$d->harga_ppn);
                                    $no++;
                                }
                            ?>
                            <tr>
                                <td colspan="6"><p align="right">Total</p></td>
                                <td><?php echo $total;?></td>
                            </tr>
                        </table>
                    </div>
                </div>                        
</body>
</html>