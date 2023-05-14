<?php view('/partial/header',compact('headslider'));?>

<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <?php
                    if ($about['image'] ?? ''){?>
                        <img src="<?= img($about['image'] ?? '') ?>">
                        <?php
                    }
                    ?>
<!--                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=g0zKzAo595U" data-target="#videoModal">-->
<!--                        <span></span>-->
<!--                    </button>-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <p>About Us</p>
                        <h2><?=  $about['title']?></h2>
                    </div>
                    <div class="about-text">
                        <p>
                        <h2><?=  $about['text'] ?? ''?></h2>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php view('/partial/footer',compact('contact')) ?>