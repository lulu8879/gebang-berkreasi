<br>
<section>
    <div class="container pb-5 shadow-sm p-3 mb-5 bg-white rounded">
        <?= $about == null ? '<h2 class="text-center pb-5 ">Tentang Dusun Gebang</h2>' : $about->about; ?>
    </div>
</section>
<section>
    <div class="container pb-5 shadow-sm p-3 pt-5 mb-5 bg-white rounded">
        <div class="row ml-5 mr-5">
            <?php if (count($contacts) == 0) : ?>
                <div class="col mb-4 text-center">
                    <h3>Belum ada Kontak yang ingin ditampilkan</h3>
                </div>
            <?php else : ?>
                <?php foreach ($contacts as $contact) : ?>
                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 18rem; display: block;margin: auto;">
                            <div class="card-header font-weight-bold text-center">Informasi Kontak</div>
                            <div class="card-body text-success text-center">
                                <h5 class="card-title text-center">
                                    <i class="fa fa-user fa-2x"></i>
                                </h5>
                                <h6><?= $contact->name; ?></h6>
                                <hr>
                                <h5 class="card-title text-center">
                                    <i class="fa fa-phone fa-2x"></i>
                                </h5>
                                <h6><?= $contact->telp; ?></h6>
                                <hr>
                                <h5 class="card-title text-center">
                                    <i class="fa fa-at fa-2x"></i>
                                </h5>
                                <h6><?= $contact->email == null || empty($contact->email) ? '-' : $contact->email; ?></h6>
                                <hr>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</section>
<section>
    <div class="container pb-5 shadow-sm p-3 pt-5 mb-5 bg-white rounded">
        <div class="font-weight-bold text-center">
            <h1>Produk Unggulan</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3">
            <?php if (count($products) == 0) : ?>
                <div class="col mb-4">
                    <h3>Belum ada Produk Unggul yang ingin ditampilkan</h3>
                </div>
            <?php else : ?>
                <?php $i = 0; ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="<?= base_url(); ?>storage/products/images/<?= $product->image; ?>" class="card-img-top" alt="<?= $product->title; ?>" style="height: 384px;width: 100%;object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->title; ?></h5>
                                <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#image<?= $i; ?>">Lihat</button>
                                <div class="modal fade bd-example-modal-xl" id="image<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <img src="<?= base_url(); ?>storage/products/images/<?= $product->image; ?>" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</section>