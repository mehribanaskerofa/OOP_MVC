<?php view('/partial/header',compact('headslider'));?>


<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <?php
                    if ($blog['image'] ?? ''){?>
                        <img src="<?= img($blog['image'] ?? '') ?>">
                        <?php
                    }
                    ?>
                    <h2><?= $blog['title'] ?? '' ?></h2>

                    <p>
                        <?= $blog['text'] ?? '' ?>
                    </p>
                </div>
                <div class="single-tags">
                    <a href="">Slag: <?= $blog['slag'] ?? '' ?></a>
                    <a href="">Tarix: <?= $blog['date'] ?? '' ?> </a>

                </div>
            </div>


        </div>
    </div>
</div>
<!-- Single Post End-->


<?php view('/partial/footer') ?>