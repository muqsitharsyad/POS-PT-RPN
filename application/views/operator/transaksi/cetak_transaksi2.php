<head>
    <title>Detail Transaksi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<div id="laporan">
<table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<?php 
    $b=$det_kostumer->row_array();
    $c=$det_trx->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;">
        <tr>
            <th style="text-align:left;">Nomor Transaksi</th>
            <th style="text-align:left;">: <?php echo $c['nomor_transaksi'];?></th>
            <th style="text-align:left;">Kostumer</th>
            <th style="text-align:left;">: <?php echo $b['nama_kostumer'];?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal</th>
            <th style="text-align:left;">: <?php echo $c['tgl_transaksi'];?></th>
            <th style="text-align:left;">Kontak</th>
            <th style="text-align:left;">: <?php echo $b['kontak'];?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Operator</th>
            <th style="text-align:left;">: <?php echo $c['nama_lengkap'];?></th>
            <th style="text-align:left;">Alamat</th>
            <th style="text-align:left;">: <?php echo $b['alamat'];?></th>
        </tr>
        <tr>
            <th style="text-align:left;"></th>
            <th style="text-align:left;"></th>
            <th style="text-align:left;">Kode Pos</th>
            <th style="text-align:left;">: <?php echo $b['kode_pos'];?></th>
        </tr>
</table>

<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Sub Total</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
$total=0;
    foreach ($detail->result_array() as $i) {
        $no++;
        
        $nabar=$i['nama_barang'];
        $jml=$i['jumlah'];
        
        $hrg=$i['harga'];
        $total = $total+($jml*$hrg);
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $jml;?></td>
        <td style="text-align:right;"><?php echo $hrg;?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="5" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo $total;?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Padang, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( <?php echo $this->session->userdata('nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>