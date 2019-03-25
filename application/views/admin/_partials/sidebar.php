<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(4) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'barang' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Barang</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('barang/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('barang') ?>">Daftar</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'satuan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-vials"></i>
            <span>Satuan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('satuan/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('satuan') ?>">Daftar</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Kategori</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kategori/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('kategori') ?>">Daftar</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'operator' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Operator</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('operator/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('operator') ?>">Daftar</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'cabang' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Cabang</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('cabang/tambah') ?>">Tambah</a>
            <a class="dropdown-item" href="<?php echo site_url('cabang') ?>">Daftar</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Transaksi</span></a>
    </li>
</ul>