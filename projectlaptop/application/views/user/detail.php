<div class="container">
    <div class="card mt-5">
        <h5 class="card-header">Detail Barang</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <img src="<?= $data_barang['gambar']; ?>" alt="" height="300px" width="300px">
                </div>
                <div class="col-7">
                    <h5 class="card-title"><?= $data_barang['Nama']; ?></h5>
                    <pre class="card-text"><?= $data_barang['detail']; ?></pre>

                </div>
            </div>
            <div class="row">
                <div class="col-5">
                </div>
                <div class="col-7">
                    <h5 class="card-text">RP <?= $data_barang['harga']; ?>.-</h5>
                    <p>Stok : <?= $data_barang['stok']; ?></p>
                    <a href="#" class="btn btn-primary">BELI BARANG</a>
                </div>
            </div>
        </div>
    </div>
</div>