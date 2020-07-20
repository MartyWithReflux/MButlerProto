<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

<div class="container p-3 carousel-container d-flex justify-content-center">
    <div class="row m-3 about-us">
        <div class="col-sm-6 col-lg-12 text-center">
            <a class="anchor" id="About Us"></a>
            <h2> <?php the_field('about_us_title'); ?></h2>
            <p class="our-services"><?php the_field('about_us_content'); ?></p>
        </div>
    </div>
</div>

<div class="section py-4 carousel-background anchor">
    <div id="carouselExampleControls" class="carousel slide"data-interval="false">
        <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
            <a class="anchor" id="Services"></a>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <?php for($i = 1; $i <= 3; $i++) : ?>
                <div class="carousel-item <?php if($i == 1) echo 'active' ?> text-center">
                    <h2 class="carousel-header"> <?php the_field('carousel_title_' . $i);?></h2>
                    <?php the_field('carousel_content_' . $i);?>
                    <div class="img-container">
                        <img class="d-block w-100 carousel-img"
                            <?php $image = get_field('carousel_image_'. $i . 'a'); ?>
                             src="<?php echo $image['url']; ?>"
                             alt="First slide"
                             id="CarouselImage<?php echo $i ?>">
                    </div>

                    <div class="row image-select">
                        <div class="col-xl 3 col-lg-6 col-sm-6 col-xs-12 p-0">
                            <img class="collage-image"
                                 <?php $image = get_field('carousel_image_'. $i . 'a'); ?>
                                 src="<?php echo $image['url']; ?>"
                                 alt="house1"
                                 onclick='getImageSource(this)'
                                 id="CarouselSubImage1<?php echo $i ?>">
                        </div>
                        <div class="col-xl 3 col-lg-6 col-sm-6 col-xs-12 p-0">
                            <img class="collage-image sub-image-darken"
                                <?php $image = get_field('carousel_image_'. $i . 'b'); ?>
                                 src="<?php echo $image['url']; ?>"
                                 alt="house1"
                                 onclick='getImageSource(this)'
                                 id="CarouselSubImage2<?php echo $i ?>">
                        </div>
                        <div class="col-xl 3 col-lg-6 col-sm-6 col-xs-12 p-0">
                            <img class="collage-image sub-image-darken"
                                <?php $image = get_field('carousel_image_'. $i . 'c'); ?>
                                 src="<?php echo $image['url']; ?>"
                                 alt="house1"
                                 onclick='getImageSource(this)'
                                 id="CarouselSubImage3<?php echo $i ?>">
                        </div>
                        <div class="col-xl 3 col-lg-6 col-sm-6 col-xs-12 p-0">
                            <img class="collage-image sub-image-darken"
                                <?php $image = get_field('carousel_image_'. $i . 'd'); ?>
                                 src="<?php echo $image['url']; ?>"
                                 alt="house1"
                                 onclick='getImageSource(this)'
                                 id="CarouselSubImage4<?php echo $i ?>">
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <script>
                function getImageSource(param) {
                    darkenImages(param);
                    $(param).removeClass('sub-image-darken');

                    let imageSource = $(param).attr('src');
                    let carouselImage = '#CarouselImage' + $(param).attr('id').slice(-1);
                    $(carouselImage).attr('src', imageSource);
                }

                function darkenImages(param) {
                    let id = parseInt($(param).attr('id').slice(-1));
                    let subId = parseInt($(param).attr('id').slice(-2));
                    for(i = 1; i <= 4; i++) {
                        if (i != subId) {
                            $('#CarouselSubImage' + String(i) + String(id)).addClass('sub-image-darken');
                        }
                    }
                }
            </script>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


<div class="section section-contact mb-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 contact-us-text">
                <a class="anchor" id="Contact Us"></a>
                <h3 class="contact-us-text"><?php the_field('contact_us_title');?> </h3>
                    <?php the_field('contact_us_content'); ?>
            </div>
            <div class="col-lg-6 form-font mt-5">
                <form autocomplete="off">
                    <div class="form-group">
                        <input type="text" placeholder="Full Name*" class="form-control" id="exampleInputEmail1"
                               aria-describedby="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Phone Number" class="form-control" id="exampleInputEmail2"
                               aria-describedby="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your Message*" class="form-control" id="MessageInput"
                               aria-describedby="Your Message">
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
