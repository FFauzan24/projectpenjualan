<div class="container">
    <row class="mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Barang
                </div>
                <div class="card-body">
                    <pre class="card-title">Jenis Barang : <?= $data_barang['jenis']; ?></pre>
                    <pre class="card-text">Harga Barang  : <?= $data_barang['harga']; ?></pre>
                    <pre class="card-text">Stok Barang   : <?= $data_barang['stok']; ?></pre>
                    <pre class="card-text">Detail Barang :</pre>
                    <pre class="card-text"><?= $data_barang['detail']; ?></pre>
                    <a href="<?= base_url(); ?>data/" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </row>
</div>