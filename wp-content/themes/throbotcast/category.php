<!-- вывод категории  -->
<?php 
defined("ABSPATH") or die;
get_header(); ?>
            <section class="prod_main">
                <!-- заголовок категории -->
                <h2><?php single_cat_title(); ?></h2>  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Цикл WordPress -->
                     <!-- подключаем
                     content в папке  template-parts/content -->
                <?php get_template_part('template-parts/content')?>
                <?php endwhile; else : ?>
                    <!-- <p>Записей нет.</p> -->
                <?php endif; ?>               
            </section>
<?php get_footer(); ?>