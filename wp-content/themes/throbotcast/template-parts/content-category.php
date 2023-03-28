<?php if(! has_post_format('aside')): ?> 
<article class="post-content--def"> 
        <div class="post-header  header-cat--def">
            <h2> <a href="<?php the_permalink() ?>"><?php   the_title() ?></a></h2>  
            <div class="thumbnails-cat--def">
            <a href="<?php the_permalink() ?>">
                <?php  the_post_thumbnail('cat_thumbnails')?>  
            </a>   
            </div>
        </div>     
        <div class="post-excerpt--def">     
            <?php
            $my_excerpt = get_the_excerpt();
             if(( has_excerpt()))  echo wpautop( $my_excerpt );
         
 ?>           
        </div>  
     
</article> 
<?php endif;?>