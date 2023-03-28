<!--шаблон для вывода  одного поста пояснения, выводится как пояснение рубрики  -->
<?php 
defined("ABSPATH") or die;
get_header(); ?>
<section class="post">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                     
                <?php get_template_part('template-parts/content-single','aside')          
                
                ?>
                <?php endwhile; else : ?>
                    <!-- <p>Записей нет.</p> -->
                <?php endif; ?>   
</section>
<?php get_footer(); ?>