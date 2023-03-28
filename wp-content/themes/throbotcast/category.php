<!-- вывод категории  -->
<?php 
defined("ABSPATH") or die;
get_header(); ?> 
            <section class="prod_main">               
             <h2 style="text-align: center"><?php
               //single_cat_title(); ?>
              </h2>  
              
              <?php
                      
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         
                        <?php get_template_part('template-parts/content-category-aside')?>
                        
                        <?php endwhile; else : ?>
                            <!-- <p>Записей нет.</p> -->
                        <?php endif; ?>  
               <div class="container">        
                       <section class="post post-cat--def"> 
                    <?php
                      
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                       
                        <?php get_template_part('template-parts/content-category')?>           
                     
                        <?php endwhile; else : ?>
                             <p>Информация пока отсутствует</p> 
                 
                        <?php endif; ?>      
                    </section>  
                        </div>  
            </section>
            
<?php get_footer(); ?>