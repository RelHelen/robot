<!-- вывод цикла, содержимое статьи -->
<article class="post_single"> 
<?php 
$my_filed = get_post_meta($post->ID);
//echo $post->ID;
 // var_dump($my_filed) ;

?> 
   
   <div class="block-posit-center"><h2 class="post_single_h2"><?php the_title() ?></h2> </div>
  
    <div class="post_single_thumb"><?php the_post_thumbnail('full') ?></div>
    <div class="container_"> 
          <div class="post_single-text">
             <!-- это пост                -->
                 <?php the_content(); ?>           
        </div>
                    <!-- вывод категории -->
        <div class="prod_main-category">
            <?php the_category(' / ') ?>
        </div>
    </div>
</article>  