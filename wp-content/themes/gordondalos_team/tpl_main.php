<?php
/*
Template Name: Шаблон главной страницы
*/
?>
<?php  get_header(); ?>


    <!--Меню-->
<?php include"parts/menu.php"?>

<!--    Паралакс на главной-->
    <section class="section_2">
        <?php include"parts/section_2.php"?>
    </section>

    <!--Контент-->
    <section class="section_9">
        <?php include"parts/theme_content.php"?>
    </section>

<!--    Наши работы слайдер-->
<!--    <section class="section_10">-->
<!--        --><?php //include"parts/slider.php"?>
<!--    </section>-->

<?php
$query1 = new WP_Query('page_id=135');
while($query1->have_posts()) $query1->the_post(); ;?>
    <!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>




    <!--Фото галерея-->
<!--    <section class="section_3">-->
<!--        --><?php //include"parts/photogalereya.php"?>
<!--    </section>-->
    <!--Фото галерея-->
<?php
$query1 = new WP_Query('page_id=70');
while($query1->have_posts()) $query1->the_post(); ;?>
<!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>


    <!--Как мы производим изделия из металла высочайшего качества-->
<!--    <section class="section_4">-->
<!--        --><?php //include"parts/job.php"?>
<!--    </section>-->

<?php
$query1 = new WP_Query('page_id=88');
while($query1->have_posts()) $query1->the_post(); ;?>
<!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>




    <!--Как мы работаем-->
<!--    <section class="section_5">-->
<!--        --><?php //include"parts/info_job.php"?>
<!--    </section>-->

    <!--Как мы работаем-->

<?php
$query1 = new WP_Query('page_id=57');
while($query1->have_posts()) $query1->the_post(); ;?>
<!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>


    <!--Виды работ-->
<!--    <section class="section_6">-->
<!--        --><?php //include"parts/vid.php"?>
<!--    </section>-->


<?php
$query1 = new WP_Query('page_id=94');
while($query1->have_posts()) $query1->the_post(); ;?>
    <!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>



    <!--Наши преимущества-->
    <section class="section_7">
        <?php include"parts/plus.php"?>
    </section>


    <!--Наши контакты-->

<!--    <section class="section_8">-->
<!--        --><?php //include"parts/contact.php"?>
<!--    </section>-->

<?php
$query1 = new WP_Query('page_id=39');
while($query1->have_posts()) $query1->the_post(); ;?>
    <!--    <h2 class="entry-title">--><?php //the_title(); ?><!--</h2>-->
    <div class="entry-content">
        <?php the_content(); ?>
    </div> <?php wp_reset_query(); ?>

    <!--Секция попапа-->
    <section class="section_11">
        <?php include"parts/popap.php"?>
    </section>


    <!-- меню снизу
    <footer class="footer-2" role="contentinfo">
        <div class="footer-logo">

        </div>
        <ul>
            <li class="nav-link"><a id="kompany" href="section_9">О Компании</a></li>
            <li class="nav-link"><a id="raboti" href="section_10">Наши работы</a></li>
            <li class="nav-link"><a id="foto" href="section_3">Фотогалерея</a></li>
            <li class="nav-link"><a id="vid" href="section_6">Виды работ</a></li>
            <li class="nav-link"><a id="contact" href="section_8">Контакты</a></li>
            <li class="nav-link"><a href="javascript:void(0)">Цены</a></li>
        </ul>

        <div class="footer-secondary-links">
            <ul>
                <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                <li><a href="javascript:void(0)">Privacy Policy</a></li>
            </ul>

            <ul class="footer-social">
                <li><a href="javascript:void(0)">
                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
                </a></li>
                <li><a href="javascript:void(0)">
                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
                </a></li>
                <li><a href="javascript:void(0)">
                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
                </a></li>
            </ul>
        </div>
    </footer>
    -->







<?php get_footer(); ?>