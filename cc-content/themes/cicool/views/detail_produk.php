<?= get_header(); ?>

<body id="page-top">
    <?= get_navigation(); ?>
    <div class="header-content text-center">
        <div class="header-content-inner">
            <div>
                <?php foreach ($produks as $produk): ?>

                <h2 id="homeHeading">
                    <?= $produk->nama_produk ?>
                </h2>
                <hr class="hrcenter">
                <div class="row" style="padding: 10px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img src="<?= BASE_URL . 'uploads/produk/' . $produk->photo; ?>" class="image-responsive"
                            alt="image produk" title="photo produk" width="500px" style="padding: 10px">
                        <h4 style="color: black;text-align:left">
                            Deskripsi :<br>
                        </h4>
                        <p style="color: black;text-align:left">
                            <?= $produk->deskripsi_produk ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    </div>

    <?= get_footer(); ?>