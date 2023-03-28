<?php if(has_post_format('aside')): ?> 
<article class="post"> 
<div class="post-header">
      <h2><?php   the_title() ?></h2>  
      <div class="post_categ_thumb">
        <?php  the_post_thumbnail('fill')  ?>    
     </div>
</div>
      
      <div class="post-content">       
         <?php   the_content(); ?>           
      </div>  
     
</article> 
<?php endif;?>