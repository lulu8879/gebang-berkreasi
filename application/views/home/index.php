<!-- Welcome -->
<section>
    <div>
        <!-- Jumbotron -->
        <div class="card card-image" style="background-image: url('<?= base_url(); ?>assets/img/jumbotron/image1.jpg')">
            <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                <div class="py-5">
                    <!-- Content -->
                    <div class="container container-index mt-2 mb-2 pt-2 pb-2">
                        <?= $intro == null ? '<h2 class="card-title h2 my-4 py-2">Selamat Datang</h2>' : $intro->intro; ?>
                        <a href="<?= base_url(); ?>home/gallery" class="btn btn-outline-light"><i class="fa fa-image"> Kunjungi Galery</i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </div>
</section>
<!-- Welcome -->
<!-- Gallery Product -->
<section>
    <div class="container">
        <h1 class="text-center text-gallery mt-5 mb-3">Produk Ungulan</h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="row row-cols-2 shadow-sm p-3 mb-5 mt-5 bg-white rounded produk-unggulan">
            <?php if (count($products) == 0) : ?>
                <div class="col">
                    <h3>Belum ada Produk Unggul yang ingin ditampilkan</h3>
                </div>
            <?php else : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <img src="<?= base_url(); ?>storage/products/images/<?= $product->image; ?>" class="img-fluid">
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
</section>
<!-- Gallery Product -->