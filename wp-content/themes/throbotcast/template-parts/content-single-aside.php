
<article class="post_single_aside"> 
<?php 
//$my_filed = get_post_meta($post->ID);
//echo $post->ID;
 // var_dump($my_filed) ;
//var_dump(get_post_format());
?>    
   <div class=" "><h2 class=" "><?php the_title() ?></h2></div>
  
    <div class=""><?php the_post_thumbnail('full') ?></div>
    <div class="container"> 
          <div class="post_single-text">
             
                 <?php the_content();                
                 ?>      
                </div>
                   
        <!-- <div class="prod_main-category">
            <?php //the_category(' / ')
             ?>
        </div> -->
    </div>
</article>  