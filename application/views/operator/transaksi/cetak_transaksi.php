<html>
<head>
    <title>Invoice Transaksi</title>
</head>
<style type="text/css">
    /*table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    #data table, th{
        text-align: left;
        border: 0px;
    }
    table, th{
        text-align: left;
        border: 1px;
    }*/
    th, td {
      padding: 5px;
      text-align: left;
    }
    .tabeldua th {
      text-align: left;
      width: 120px;
    }
    .tabelsatu th{
        width: 115px;
        vertical-align: top;
        height: 5px;
    }
</style>
<body>
<h1 style="text-align: center;">Invoice Transaksi  </h1>       
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
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Sub Total</th>
                            </tr>
                            <?php
                                $no=1;
                                $total=0;
                                foreach ($detail as $d) {
                                    echo "<tr>";
                                    echo       "<td>".$no."</td>";
                                    echo       "<td>".$d->nama_barang."</td>";
                                    echo       "<td>".$d->jumlah."</td>";
                                    echo       "<td>".$d->harga."</td>";
                                    echo       "<td>".$d->jumlah*$d->harga."</td>";
                                    echo      "</tr>";
                                    $total = $total+($d->jumlah*$d->harga);
                                    $no++;
                                }
                            ?>
                            <tr>
                                <td colspan="4"><p align="right">Total</p></td>
                                <td><?php echo $total;?></td>
                            </tr>
                        </table>                        
</body>
</html>