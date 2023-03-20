<!--шаблон для вывода  одного поста  -->
<?php 
defined("ABSPATH") or die;
get_header(); ?>
<section class="post">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Цикл WordPress -->
                     <!-- подключаем
                        content в папке  template-parts/content-single -->
                        <!-- content-single-cast -->
                <?php get_template_part('template-parts/content-single-cast')?>
                <?php endwhile; else : ?>
                    <!-- <p>Записей нет.</p> -->
                <?php endif; ?>   
</section>
<?php get_footer(); ?>