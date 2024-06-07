<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>


<div class="container">
    <div class="row">
        <div class="col">

            <!-- About Us Section -->
            <section id="about-us" class="section about-us">

                <div class="container">

                    <div class="row gy-4">


                        <div class="col-lg- order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                            <div class="container">
                                <?php foreach ($newses as $news) : ?> <div class="row">
                                        <div class="col-md-12 mb-2 card">
                                            <div class="card-body">
                                                <h5 class="h5"><a href="/berita/<?= $news['slug'] ?>"><?= $news['title'] ?></a></h5>
                                                <p><?= substr($news['content'], 0, 120) ?> </p>

                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>

                </div>

            </section><!-- /About Us Section -->



        </div>
    </div>
</div>

<?= $this->endSection(); ?>