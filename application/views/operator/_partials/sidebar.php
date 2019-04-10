<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('transaksi') ?>">
            <i class="fas fa-fw fa-funnel-dollar"></i>
            <span>Transaksi</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kostumer' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Kostumer</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kostumer/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('kostumer') ?>">Daftar</a>
        </div>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('transaksi/laporan_operator') ?>">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Daftar Transaksi</span></a>
    </li>
</ul>