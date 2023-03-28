<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php    
        if (get_bloginfo('name') ) : ?>            
            <?php echo get_bloginfo('name') ;  ?>           	 
        <?php endif; ?>
    </title>
<?php 
if(isset($post->ID)){
    $my_filed = get_post_meta($post->ID);}
    //var_dump($my_filed);     
?>
<meta name="keywords" content="<?php
 if( isset( $my_filed['my_keywords']) ){
    echo($my_filed["my_keywords"][0]);}
?>">
<meta name="description" content="<?php
 if( isset( $my_filed['my_description']) ){
    echo($my_filed["my_description"][0]);}
    else{          
        if (get_bloginfo('description')){             
            echo get_bloginfo('description'); 
        }}?>">
<?php wp_head();?>
</head>
<body <?php body_class() ?>>
<!-- плагины привязываются к этому хуку -->
<?php wp_body_open() ?>
        <div class="_content">             
            <header class="header"> 
                <div class="header-top-bg">
                    <div class="container">
                        <div class="header-top">                  
                            <span class="top-location">
                            <?php   if  (get_theme_mod('contact_adres-top') !=''):?>
                            <span class="iconm iconm-send green"></span>
                            <?php
                            echo get_theme_mod('contact_adres-top');  
                        
                            endif; ?>   
                            </span>
                            <span class="top-phone">
                            <a href=" <?php if  (get_theme_mod('contact_phone-top') !='') echo get_theme_mod('contact_phone-top');                  
                            ?>  ">
                            <?php if  (get_theme_mod('contact_phone-top') !=''):   ?>
                                <span class="iconm iconm-phone1 green"></span>
                                <?php     
                                echo get_theme_mod('contact_phone-top');                  
                                endif;  ?> </a>
                            </span>
                        </div>   
                    </div> 
                </div>
                <div class="header-nav-bg">
                <div class="container">
                    <div class="header-nav">
                        <div class="site-brand">                                          
                            <?php if(has_custom_logo()):?>                                
                                    <?php  the_custom_logo();  ?>     
                                    
                            <?php endif; ?>               
                            <?php
                                $blog_info   = get_bloginfo('name');
                                $show_title   = ( true === get_theme_mod( 'header_text', true) );     
                                if ($blog_info && $show_title) : ?>
                                    <a href="<?= home_url('/')?>" class="site-title"> 
                                    <?php echo $blog_info ;  ?>
                                    </a>		 
                            <?php endif; ?>
                                                
                        </div>
                        <nav  class="nav-header" role="navigation" id="nav-header">
                            <?php  wp_nav_menu(array(
                                    'theme_location'=>'header_menu',
                                    'container'=>false,
                            ))?>               
                        </nav>
                        <div class="hamb-menu" id="hamb-menu">
                            <div class="hamp-item hamp-item-1"></div>
                            <div class="hamp-item hamp-item-2"></div>
                            <div class="hamp-item hamp-item-3"></div>
                        </div>
                    </div> 
                </div> 
                </div>       
            </header> 
            <main>