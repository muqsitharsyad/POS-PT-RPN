<html>
<head>
    <title>Invoice Transaksi</title>
    <?php $this->load->view("operator/_partials/head.php") ?>
    <?php foreach ($op as $o) {
        if ($o->nama_cabang == "Pusat Penelitian Bioteknologi dan Bioindustri Indonesia") 
    {
        $this->load->view("operator/_partials/kop_surat/biotek.php");
    }
    elseif ($o->nama_cabang == "Pusat Penelitian Karet")
    {
        $this->load->view("operator/_partials/kop_surat/karet.php");
    }
    elseif ($o->nama_cabang == "Pusat Penelitian Kelapa Sawit")
    {
        $this->load->view("operator/_partials/kop_surat/sawit.php");
    }
    elseif ($o->nama_cabang == "Pusat Penelitian Kelapa Sawit")
    {
        $this->load->view("operator/_partials/kop_surat/kopi.php");
    }
    elseif ($o->nama_cabang == "Pusat Penelitian Teh dan Kina")
    {
        $this->load->view("operator/_partials/kop_surat/teh.php");
    }
    elseif ($o->nama_cabang == "Pusat Penelitian Perkebunan Gula Indonesia")
    {
        $this->load->view("operator/_partials/kop_surat/gula.php");
    }
    else
    {
        $this->load->view("operator/_partials/kop_surat/rpn.php");
    }
    }
    ?>
</head>
<style type="text/css">
    .tabel th, td{
        font-size: 12px;
        vertical-align: top;
    }
    th{
        font-size: 12px;
    }
</style>
<body>
<h4 style="text-align: center;">.: Invoice Transaksi :.</h4>       
            <div class="" >
                    <div class="card-body">
                        
                        <table width="100%" border="0" class="tabel">
                        <?php 
                        $user = $this->session->userdata('username');
                        $tgl = date('d - M - y');
                            foreach ($det_kostumer as $dt) {
                                echo "
                                        <tr>
                                            <th width='150px'>Nomor Transaksi </th>
                                            <th>:</th>
                                            <th width='150px'>$dt->nomor_transaksi</th>
                                            <th>Kostumer </th>
                                            <th>:</th>
                                            <th width='200px'>$dt->nama_kostumer</th>
                                        </tr>
                                        <tr>
                                            <th width='150px'>Tanggal Transaksi </th>
                                            <th>:</th>
                                            <th width='150px'>$dt->tgl_transaksi</th>
                                            <th>Kontak </th>
                                            <th>:</th>
                                            <th width='200px'> $dt->kontak</th>
                                        </tr>
                                        <tr>
                                            <th width='150px'>Operator  </th>
                                            <th>:</th>
                                            <th width='150px'>$user</th>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <th width='200px'>$dt->alamat</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Kode Pos</th>
                                            <th>:</th>
                                            <th width='200px'> $dt->kode_pos</th>
                                        </tr>";
                            }                           
                        ?>
                        </table>
                        <br>
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
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
                                            <td>".number_format($d->harga)."</td>
                                            <td>".number_format($d->harga_ppn)."</td>
                                            <td>".number_format($d->jumlah*$d->harga_ppn)."</td>
                                            </td>
                                          </tr>";
                                    $total = $total+($d->jumlah*$d->harga_ppn);
                                    $no++;
                                }
                            ?>
                            <tr>
                                <td colspan="6"><p align="right">Total</p></td>
                                <td><?php echo number_format($total);?></td>
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
                    </div>
                </div>                        
</body>
</html>