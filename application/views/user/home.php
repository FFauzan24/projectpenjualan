<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang Di TechnoLove</h1>
        <p class="lead">Pusat Jual Beli Part Komputer Dan Laptop Second Berkualitas</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($data_barang as $data) : ?>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="<?= base_url() ?>assets/data_barang/<?= $data['gambar'] ?>" alt="" height="200px" width="200px">
                    <div class="caption">
                        <p><?= $data['Nama'] ?></p>
                        <h5> RP <?= $data['harga'] ?></h5>
                        <p>
                            <a href="<?= base_url(); ?>Data/hapus/<?= $data['id_barang'] ?>" class="btn btn-primary" role="button">Detail</a>
                            <a href="?beli=<?= $data['id_barang'] ?>" class="btn btn-primary" role="button">BELI</a>
                        </p>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php

//membuat session
if (isset($_GET['beli'])) {
    if (isset($_SESSION['chart'][$_GET['beli']])) {
        $_SESSION['chart'][$_GET['beli']]++;
    } else {
        $_SESSION['chart'][$_GET['beli']] = 1;
    }
}
