<footer>   
<div class="_container">
   <div class="personal_footer" >    
       
         <div class="soch_block_footer"> 
            <p>
                        <?php 
                        if (get_theme_mod('soch_header') !='') echo get_theme_mod('soch_header');                  
                        ?>
                    
            </p>
            <div class="soch_items">
                <?php  if(get_theme_mod('facebook_has') != '') :  ?>            
                    <div class="soch_item">        
                    
                        <a href="<?php if (get_theme_mod('facebook_url') !='') echo get_theme_mod('facebook_url'); ?>"> 
                        <img src="<?php if (get_theme_mod('facebook_img') !='') echo get_theme_mod('facebook_img');?>" width="30px" alt="facebook"/>
                    </a>
                    </div>           
                <?php endif;?> 
                
                
                <?php  if(get_theme_mod('vk_has') === true) :  ?>            
                    <div class="soch_item">          
                    
                        <a href="<?php if (get_theme_mod('vk_url') !='') echo get_theme_mod('vk_url'); ?>"> 
                        <img src="<?php if (get_theme_mod('vk_img') !='') echo get_theme_mod('vk_img');?>" width="30px" alt="vk"/>
                    </a>
                    </div>           
                <?php endif;?> 

                <?php  if(get_theme_mod('telegram_has') != '') :  ?>            
                    <div class="soch_item">              
                    
                        <a href="<?php if (get_theme_mod('telegram_url') !='') echo get_theme_mod('telegram_url'); ?>"> 
                        <img src="<?php if (get_theme_mod('telegram_img') !='') echo get_theme_mod('telegram_img');?>" width="30px" alt="telegram"/>
                    </a>
                    </div>           
                <?php endif;?> 
            </div>            
        </div>
        <div>
            <nav  class="nav-footer" role="navigation">
                    <?php                   
                    //получение id постов в меню               
                    $x=Ftidpost_Footer::cr_menu_items_ID('footer_menu');
                    //$x = cr_menu_items_ID('footer_menu');
                    $my_fileds=[];
                    if($x) {
                            foreach($x as $key){                       
                                for ($i = 0; $i < count($key); $i++) {                         
                                    $my_fileds[$i] = $key[$i];
                                }
                            } 
                            foreach($my_fileds as $id){  
                                ?>
                                <div class="nav-foot_item">
                                <?php
                               // echo  $id;
                                $my_filed = get_post_meta($id);
                                 
                                  ?>
                                  <div class="foot_title">
                                  <?php echo get_the_title($id) ; ?></div>
                                  <?php
                                                                                             
                                if(isset( $my_filed['my_image_footer'])) 
                                {
                                $img2 = wp_get_attachment_image( $my_filed["my_image_footer"][0],'footer_thumbnails'); 
                                ?>
                                <a href="<?php  echo get_permalink($id) ;?>"><?php echo $img2;?></a>
                                <?php
                                }
                                ?>
                                </div>
                                <?php
                                //var_dump($my_filed);
                            }                  
                            // $my_filed = get_post_meta( $post->ID);
                            // var_dump($my_filed);
                         
                    }
                    ?>               
            </nav> 
        </div>     
        <div>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
            <?php 
                if (get_theme_mod('contact_adres') !='') echo get_theme_mod('contact_adres');                  
                ?>
                <br>
                <?php 
                if (get_theme_mod('contact_phone') !='') echo get_theme_mod('contact_phone');                  
                ?>
        </div> 
   </div>
    </div>
 

   <div class="copyright" >   © 2017-2018  
    <div class="right_block"> Политика</div> 
   </div>
   </div>
  </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>