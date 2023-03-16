<footer>   
<div class="container">
   <div class="personal_footer" >    
        <div class="site-brand site-brand-footer">                                          
                    <?php if(has_custom_logo()):?>                           
                              <?php  the_custom_logo();  ?>                            
                    <?php endif; ?>    
                                         
        </div>
        <div>
            <?php if( has_nav_menu('footer_menu')):?>
                
                <nav  class="nav-footer-list" role="navigation">
                <div class="footer-menu-title">Продукция</div>
                        <?php  wp_nav_menu(array(
                                'theme_location'=>'footer_menu',
                                'container'=>false,
                        ))?>               
                </nav> 
            <?php endif; ?>                 
        </div> 
        <div>
            <?php if( has_nav_menu('footer_menu_info')):?>
                
                <nav  class="nav-footer-list" role="navigation">
                <div class="footer-menu-title">Компания</div>
                        <?php  wp_nav_menu(array(
                                'theme_location'=>'footer_menu_info',
                                'container'=>false,
                        ))?>               
                </nav> 
            <?php endif; ?>                 
        </div> 
        
        
        <div>
            <div class="adress_block_footer">
            <div>
                <?php 
                if (get_theme_mod('contact_adres') !=''): ?>
                    <img src="<?=get_template_directory_uri()?>/assets/icon/i_pointer.png" alt="">     
                <?php 
                    echo get_theme_mod('contact_adres'); 
                    endif; ?> 
             </div>
             <div>
                <?php 
                if (get_theme_mod('contact_phone') !=''): ?>               
                 <img src="<?=get_template_directory_uri()?>/assets/icon/i_phone.png" alt="">  
                 <a href="tel: <?=get_theme_mod('contact_phone');?>">                
                <?php echo get_theme_mod('contact_phone'); 
                    endif; ?> </a>
            </div> 
            </div>       
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
                    <img src="<?php if (get_theme_mod('facebook_img') !='') echo get_theme_mod('facebook_img');?>" height="22px" alt=" "/>
                </a>
                </div>           
            <?php endif;?> 
            
            
            <?php  if(get_theme_mod('vk_has') === true) :  ?>            
                <div class="soch_item">               
                    <a href="<?php if (get_theme_mod('vk_url') !='') echo get_theme_mod('vk_url'); ?>"> 
                    <img src="<?php if (get_theme_mod('vk_img') !='') echo get_theme_mod('vk_img');?>" height="22px" alt=" "/>
                </a>
                </div>           
            <?php endif;?> 

            <?php  if(get_theme_mod('telegram_has') != '') :  ?>            
                <div class="soch_item">                
                    <a href="<?php if (get_theme_mod('telegram_url') !='') echo get_theme_mod('telegram_url'); ?>"> 
                    <img src="<?php if (get_theme_mod('telegram_img') !='') echo get_theme_mod('telegram_img');?>" height="22px" alt=" "/>
                </a>
                </div>           
            <?php endif;?> 
        </div>            
    </div>

        </div> 
   </div> 
 </div>
    <div class="copyright" > 
        <div class="container">
            <div class="copyright_inner">
                <div> © 2017-2018 </div> 
                <div class="right_block"> Политика конфиденциальности</div> 
            </div>
        </div>  

   </div>
  
  </footer>
</div>
            </div><!-- // _content -->
<?php wp_footer(); ?>
</body>
</html>