<div class="container">
    <?php if ($this->session->flashdata('barang')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Barang<strong> Berhasil</strong> <?= $this->session->flashdata('barang') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Barang..." name="cari">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Barang</h3>
            <?php if (empty($data_barang)) : ?>
                <div class="alert alert-warning" role="alert">
                    Data Barang Tidak Ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($data_barang as $data) : ?>
                    <li class="list-group-item">
                        <?= $data['Nama']; ?>
                        <a href="<?= base_url(); ?>Data/hapus/<?= $data['id_barang'] ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                        <a href="<?= base_url(); ?>Data/edit/<?= $data['id_barang'] ?>" class="badge badge-warning float-right"">Edit</a>
                        <a href=" <?= base_url(); ?>Data/detail/<?= $data['id_barang'] ?>" class="badge badge-primary float-right"">Detail</a>
                    
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
                -->
    <div class=" container mt-3 mb-5">
        <h3>DAFTAR BARANG</h3>
        <table class="table table-light">
            <thead class="thead thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">JENIS</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">STOK</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_barang as $data) : ?>
                    <tr>
                        <th scope="col"><?= $data['id_barang'] ?></th>
                        <th scope="col"><?= $data['Nama'] ?></th>
                        <th scope="col"><?= $data['jenis'] ?></th>
                        <th scope="col-6"><?= $data['detail'] ?></th>
                        <th scope="col"><?= $data['harga'] ?></th>
                        <th scope="col"><?= $data['stok'] ?></th>
                        <th scope="col-6">
                            <a href="<?= base_url(); ?>Data/hapus/<?= $data['id_barang'] ?>" class="badge badge-danger" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                            <a href="<?= base_url(); ?>Data/edit/<?= $data['id_barang'] ?>" class="badge badge-warning">Edit</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <dvi class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>Data/tambah" class="btn btn-dark">Tambah Data Barang</a>
            </div>
        </dvi>
    </div>