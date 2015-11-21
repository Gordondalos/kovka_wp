<?php  get_header(); ?>


    <!--Меню-->
<?php include"parts/menu.php"?>

    <!--Паралакс на главной-->
    <section class="section_2">
        <?php include"parts/section_2.php"?>
    </section>

    <!--Контент-->
    <section class="section_9">
        <?php include"parts/theme_content.php"?>
    </section>

    <section class="section_8">
        <?php include"parts/footer.php"?>
    </section>

    <!--Секция попапа-->
    <section class="section_11">
        <?php include"parts/popap.php"?>
    </section>



<?php get_sidebar(); ?>
<?php get_footer(); ?>