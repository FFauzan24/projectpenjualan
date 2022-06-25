<div class="container" style="padding-top:100px; padding-bottom:50px;">
    <div class="card">
        <h5 class="card-header">Order</h5>
        <div class="card-body">
            <?php
            echo '<p>Nama : ' . $_SESSION['penerima'] . '</p>
                <p>No HP : ' . $_SESSION['no'] . '</p>
                <p>Alamat : ' . $_SESSION['alamat'] . '</p>
                <p>Order :</p>';
            foreach ($_SESSION['chart'] as $key => $value) {
                echo '<pre>     ' . $produk[$key]['namaproduk'] . ' : ' . $value . ' Pcs</pre>';
                $jumlah = $jumlah + $produk[$key]['Harga'] * $value;
            }


            echo '<p>Total : ' . $jumlah . '</p>';

            echo '<a href="?order=" class="btn btn-dark">Order Sekarang</a>';
            //hapus semua
            if (isset($_GET['order'])) {
                unset($_SESSION['chart']);
                $_SESSION['chart'][0] = 0;
                $_SESSION['penerima'] = "";
                $_SESSION['no'] = "";
                $_SESSION['alamat'] = "";
            }
            ?>
        </div>
    </div>
</div>

</div>