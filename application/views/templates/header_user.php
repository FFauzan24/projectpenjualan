<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title><?= $judul; ?></title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"">
        <div class=" container">
        <a class="navbar-brand" href="#">
            <font color="#0C87F2">Techno</font>Love
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url(); ?>user/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= base_url(); ?>user/keranjang/">Keranjang</a>
                <a class="nav-link" href="<?= base_url(); ?>user/order">Order</a>
            </div>
        </div>
        </div>
    </nav>