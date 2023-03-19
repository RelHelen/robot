<!--шаблон для вывода  одного поста  -->
<?php 
defined("ABSPATH") or die;
get_header(); ?>
<section class="post">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                     
                <?php get_template_part('template-parts/content-single')
                
                
                ?>
                <?php endwhile; else : ?>
                    <!-- <p>Записей нет.</p> -->
                <?php endif; ?>   
</section>
<?php get_footer(); ?>