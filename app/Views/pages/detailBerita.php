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
                                <div class="col-lg- order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                                    <div class="container">
                                        <h2 class="h2"><?= $news['title'] ?></h2>
                                        <div class="mb-5">
                                            <span><?= $news['created_at'] ?></span>
                                        </div>
                                        <div>
                                            <?= $news['content'] ?>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section><!-- /About Us Section -->



        </div>
    </div>
</div>
<?= $this->endSection(); ?>