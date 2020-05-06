<section>
    <div class=" text-center pt-5 judulblog">
        <h1 class="text-white"><i class="fa fa-pencil"></i><br>Blog Dusun Gebang</h1>
    </div>
</section>
<section>
    <div class="team-boxed">
        <div class="container">
            <div class="row people">
                <?php if (count($blogs) == 0) : ?>
                    <h3>Belum ada Artikel / Blog yang tersedia</h3>
                <?php else : ?>
                    <?php foreach ($blogs as $blog) : ?>
                        <div class="col-md-6 col-lg-4 item">
                            <div class="box">
                                <img class="rounded img-fluid" src="<?= $blog->src_image; ?>">
                                <h3 class="name text-left"><?= $blog->title; ?></h3>
                                <p class="text-left  tanggal-blog"><?= date('d F Y', strtotime($blog->created_at)); ?></p>
                                <div class="description text-left">
                                    <?= $blog->content; ?>
                                </div>
                                <p class="text-left  nama-penulis"><?= $blog->writer; ?></p>
                                <a href="<?= base_url(); ?>home/blog_detail/<?= $blog->id; ?>" target="_blank" class="btn btn-primary btn-selengkapnya"><span>Selengkapnya</span></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>