<?php  get_header(); ?>


    <!--Меню-->
<?php include"parts/menu.php"?>

    <section class="section_8">
        <div class="hero">
            <div class="hero-inner">

                <div class="hero-copy">
                    <h2 class="wow fadeInUpBig"><?php the_title(); ?></h2>
                    <br> <br>

                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.7591297693816!2d37.556519316006614!3d55.74531400003689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bc6ea3e1085%3A0xcc90ec0fc9cc38a9!2z0JHRgNGP0L3RgdC60LDRjyDRg9C7LiwgMzIsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMjEwNTk!5e0!3m2!1sru!2skg!4v1447862564473" width="80%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="info">
                        <?php the_post()?>
                        <?php the_content(); ?>
                        <a href="#" class="btn btn-danger btn-lg opener">Задать вопрос</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Секция попапа-->
    <section class="section_11">
        <?php include"parts/popap.php"?>
    </section>





<?php get_footer(); ?>