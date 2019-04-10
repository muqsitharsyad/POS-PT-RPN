<html>
<head>
    <title>Invoice Transaksi</title>
    
    <?php $this->load->view("operator/_partials/kop_surat.php") ?>
</head>
<style type="text/css">
    th, td {
      padding: 5px;
      text-align: left;
    }
    .tabelsatu th{
        width: 120px;
        vertical-align: top;
        height: 5px;
    }
    .tabeldua th {
      text-align: center;
      width: 110px;
    }    
</style>
<body>
<h1 style="text-align: center;">.:Invoice Transaksi:.</h1>       
            <table style="" border="0" class="tabelsatu">
                <?php 
                $user = $this->session->userdata('username');
                $tgl = date('d - M - y');
                foreach ($det_kostumer as $dt) {
                    echo "
                            <tr>
                                <th>Nomor Transaksi </th>
                                <th width='50px'>:</th>
                                <th>$dt->nomor_transaksi</th>
                                <th>Kustomer </th>
                                <th width='50px'>:</th>
                                <th>$dt->nama_kostumer</th>
                            </tr>
                            <tr>
                                <th>Tanggal Transaksi </th>
                                <th width='50px'>:</th>
                                <th> $tgl</th>
                                <th >Kontak </th>
                                <th width='50px'>:</th>
                                <th> $dt->kontak</th>
                            </tr>
                            <tr>
                                <th>Operator  </th>
                                <th width='50px'>:</th>
                                <th>$user</th>
                                <th>Alamat</th>
                                <th width='50px'>:</th>
                                <th>$dt->alamat</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th width='50px'></th>
                                <th></th>
                                <th>Kode Pos</th>
                                <th width='50px'>:</th>
                                <th> $dt->kode_pos</th>
                            </tr>";
                            }                           
                        ?>
                        </table>                       
                        <p></p>
                        <table style="width:100%;border-collapse: collapse;" border="1 solid black" class="tabeldua">
                            <tr>
                                <th width="50px">No</th>
                                <th>Nama Produk</th>
                                <th>Satuan</th>
                                <th width="50px">Jumlah</th>
                                <th>Harga (Rp Kg/L)</th>
                                <th>Harga + PPN</th>
                                <th>Sub Total</th>
                            </tr>
                            <?php
                                $no=1;
                                $total=0;
                                foreach ($detail as $d) {
                                    echo "<tr>";
                                    echo       "<td>".$no."</td>";
                                    echo       "<td>".$d->nama_barang."</td>";
                                    echo       "<td>".$d->nama_satuan."</td>";
                                    echo       "<td>".$d->jumlah."</td>";
                                    echo       "<td>".number_format($d->harga)."</td>";
                                    echo       "<td>".number_format($d->harga_ppn)."</td>";
                                    echo       "<td>".number_format($d->jumlah*$d->harga_ppn)."</td>";
                                    echo      "</tr>";
                                    $total = $total+($d->jumlah*$d->harga_ppn);
                                    $no++;
                                }
                            ?>
                            <tr>
                                <td colspan="6"><p align="right">Total</p></td>
                                <td><?php echo number_format($total);?></td>
                            </tr>
                        </table>                        
</body>
</html>