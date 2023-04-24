<?php view('/partial/header',compact('headslider'));?>

    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <h2>Butun Bloglar</h2>
            </div>
            <div class="row">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <?php
                                if ($blog['image'] ?? ''){?>
                                    <img src="<?= img($blog['image'] ?? '') ?>">
                                    <?php
                                }
                                ?>    </div>
                            <div class="blog-content">
                                <h2 class="blog-title"><?= $blog['title'] ?? '' ?></h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><?= $blog['slag'] ?? '' ?></p>
                                    <p><i class="far fa-calendar-alt"></i><?= $blog['date'] ?? '' ?></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        <?= $blog['text'] ?? '' ?>   </p>
                                    <a class="btn custom-btn" href="">Blog detallari</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>


<?php view('/partial/footer') ?>