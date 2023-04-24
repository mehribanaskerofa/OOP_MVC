<?php view('/partial/header',compact('headslider'));?>





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
                    <form action="<?= url('contact')?>"  method="POST" >
                        <div class="control-group">
                            <input type="text" name="name" value="<?= $data['name'] ?? '' ?>" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" value="<?= $data['email'] ?? '' ?>" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="subject" value="<?= $data['subject'] ?? '' ?>" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="message" class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message">
                                <?= $data['message'] ?? '' ?>
                            </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <?= $result['error'] ?? ''; ?><br>
                        <div>
                            <button class="btn custom-btn" ">Gonder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




<?php view('/partial/footer'); ?>