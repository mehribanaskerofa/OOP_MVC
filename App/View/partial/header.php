<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Burger King - Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?= asset('assets/img/favicon.ico')?>" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= asset('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?= asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?= asset('assets/lib/flaticon/font/flaticon.css')?>" rel="stylesheet">
    <link href="<?= asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= asset('assets/css/style.css')?>" rel="stylesheet">
</head>

<body>
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">Burger <span>King</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="<?= url('');?>" class="nav-item nav-link active">Ana sehife</a>
                <a href="<?= url('about');?>" class="nav-item nav-link">Haqqimizda</a>
                <a href="<?= url('blogs');?>" class="nav-item nav-link">Bloglar</a>
                <a href="<?= url('contact');?>" class="nav-item nav-link">Elaqe</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->


<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="<?= img($headslider['image'])?>" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1><?= $headslider['title']?></h1>
                    <p>
                        <?= $headslider['text']?>
                       </p>
                    <div class="carousel-btn">
                        <a class="btn custom-btn" href="">View Menu</a>
                        <a class="btn custom-btn" href="">Book Table</a>
                    </div>
                </div>
            </div>
<!--            <div class="carousel-item">-->
<!--                <div class="carousel-img">-->
<!--                    <img src="img/carousel-2.jpg" alt="Image">-->
<!--                </div>-->
<!--                <div class="carousel-text">-->
<!--                    <h1>World’s <span>Best</span> Chef</h1>-->
<!--                    <p>-->
<!--                        Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor-->
<!--                    </p>-->
<!--                    <div class="carousel-btn">-->
<!--                        <a class="btn custom-btn" href="">View Menu</a>-->
<!--                        <a class="btn custom-btn" href="">Book Table</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <div class="carousel-img">-->
<!--                    <img src="img/carousel-3.jpg" alt="Image">-->
<!--                </div>-->
<!--                <div class="carousel-text">-->
<!--                    <h1>Fastest Order <span>Delivery</span></h1>-->
<!--                    <p>-->
<!--                        Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio-->
<!--                    </p>-->
<!--                    <div class="carousel-btn">-->
<!--                        <a class="btn custom-btn" href="">View Menu</a>-->
<!--                        <a class="btn custom-btn" href="">Book Table</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
<!-- Carousel End -->



