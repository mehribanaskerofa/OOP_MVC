<?php view('/partial/header',compact('headslider'));?>


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <?php
                    if ($about['image'] ?? ''){?>
                        <img src="<?= img($about['image'] ?? '') ?>"  >
                        <?php
                    }
                    ?>
<!--                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">-->
<!--                        <span></span>-->
<!--                    </button>-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <p>Haqqimizda</p>
                        <h2><?=  $about['title']?></h2>
                    </div>
                    <div class="about-text">
                        <p>
                        <h2><?= substr( $about['text'],0,95)?? ''?></h2>
                        </p>
                        <p>
                        <h2><?= substr( $about['text'],95,145) ?? ''?></h2>
                        </p>
                        <a class="btn custom-btn" href="<?= url('about')?>"><?=  $about['button']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Bizimle Elaqe</p>
            <h2>İstənilən sual üçün əlaqə saxlayın</h2>
        </div>
        <div class="row align-items-center contact-information">
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Adres</h3>
                        <p><?=  $contact['address']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Elaqe nomresi</h3>
                        <p><?=  $contact['phone']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email </h3>
                        <p><?=  $contact['email']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Bizi izleyin</h3>
                        <div class="contact-social">
                            <a href="<?=  $contact['youtube']?>"><i class="fab fa-youtube"></i></a>
                            <a href="<?=  $contact['instagram']?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-form">
            <div class="col-md-6">
                <iframe src="<?=  $contact['map']?>" ></iframe>
            </div>
            <div class="col-md-6">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn custom-btn" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Blog</p>
            <h2>En son Bloglar</h2>
        </div>
        <div class="row">
            <?php foreach ($blogs as $blog) : ?>
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <?php
                        if ($about['image'] ?? ''){?>
                            <img src="<?= img($blog['image'] ?? '') ?>">
                            <?php
                        }
                        ?>                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title"><?= $blog['title'] ?? ''?></h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><?= $blog['slag'] ?? ''?></p>
                            <p><i class="far fa-calendar-alt"></i><?= $blog['date'] ?? '' ?></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                <?= $blog['text'] ?? ''?>   </p>
                            <a class="btn custom-btn" href="">Blog detallari</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Blog End -->


<?php view('/partial/footer'); ?>