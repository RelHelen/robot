<!-- вывод цикла, содержимое статьи -->
<article class="post_single__cast">    

<?php 
$my_filed = get_post_meta($post->ID);
//echo $post->ID;
 // var_dump($my_filed) ;

?> 
 <?php    if(isset( $my_filed['my_wp_editor_field2'])):?>
<div classs="post_single__cast-flya">
<h2 class="post_single_h2">
    <?php if( isset( $my_filed['my_text_field']) ){
    echo $my_filed["my_text_field"][0];} ?>
</h2> 
    <div class="post_single_thumb">
        <?php   
        if( isset( $my_filed['my_wp_editor_field2']) ){        
        //echo $my_filed["my_wp_editor_field2"][0];
        }
       ?></div>
</div>
<?php endif; ?>   
<?php   
        if( isset( $my_filed['my_image_post']) ){ 
            $img = wp_get_attachment_image( $my_filed["my_image_post"][0]);       
       // echo $img;
        }
       ?>    
    <div class="post_single-text">
        <!-- это пост                -->
    <?php the_content(); ?>           
    </div>
                <!-- вывод категории -->
    <div class="prod_main-category">
        <?php the_category(' / ') ?>
    </div>
   
    
</article>  