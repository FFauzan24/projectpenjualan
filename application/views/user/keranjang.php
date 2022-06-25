    <div class="container text-center" style="padding-top:100px; padding-bottom:50px;">
        <h2>Keranjang Belanja</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $_SESSION['chart'][999999] = 0;
                unset($_SESSION['chart'][999999]);
                $jumlah = 0;
                //tambah barang
                if (isset($_GET['tambah'])) {
                    if (isset($_SESSION['chart'][$_GET['tambah']])) {
                        $_SESSION['chart'][$_GET['tambah']]++;
                    }
                }

                //Kurang barang
                if (isset($_GET['kurang'])) {
                    if (isset($_SESSION['chart'][$_GET['kurang']])) {
                        $_SESSION['chart'][$_GET['kurang']]--;
                    }
                }

                //hapus barang
                if (isset($_GET['hapus'])) {
                    if (isset($_SESSION['chart'][$_GET['hapus']])) {
                        unset($_SESSION['chart'][$_GET['hapus']]);
                    }
                }

                foreach ($_SESSION['chart'] as $key => $value) { ?>

                    <tr>
                        <td><?= $data_barang[$key]['Nama']; ?></td>
                        <td><?= $value; ?></td>
                        <td><?= $data_barang[$key]['harga']; ?></td>
                        <td>
                            <a href="?tambah=<?= $key; ?>">Tambah</a>
                            <a href="?kurang=<?= $key; ?>">kurang</a>
                            <a href="?hapus=<?= $key; ?>">hapus</a>
                        </td>
                    </tr>
                <?php $jumlah = $jumlah + $data_barang[$key]['harga'] * $value;
                }
                ?>
                <tr>
                    <td colspan="2">Jumlah</td>
                    <td><?= $jumlah; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container mb-5" style="width: 50%;">
        <form name="form1" method="post">
            <div class="form-group">
                <label for="penerima">Nama Penerima</label>
                <input type="text" value=" " class="form-control" name="penerima" required>
            </div>
            <div class="form-group">
                <label for="no">No HP</label>
                <input type="text" value=" " class="form-control" name="no" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="textArea" value=" " class="form-control" name="alamat" required>
            </div>
            <a href="<?= base_url(); ?>User/checkout" class="btn btn-dark">Checkout Barang</a>
        </form>
    </div>