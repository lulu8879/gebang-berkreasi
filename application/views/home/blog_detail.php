<section>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center"><?= $blog->title; ?></h1>
                        <p class="text-center"><span class="by">by</span> <?= $blog->writer; ?><span class="date"><?= date('d F Y', strtotime($blog->created_at)); ?> </span></p>
                        <div class="text content-blog">
                            <?= $blog->content; ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>