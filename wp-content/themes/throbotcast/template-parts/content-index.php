<!-- 
вывод цикла 
повторяющаяся часть содержания постов на главной страницы
 -->
 <?php if(in_category('dron')) : ?>
 <article class="prod_main-item">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full') ?></a>
                <div class="prod_main-item-text">
                <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                    <!-- <a href="<?php the_permalink() ?>">Подробнее</a> -->
                </div>
                <!-- вывод категории -->
                <div class="prod_main-category">
                   <?php the_category(' / ') ?>
                </div>
</article>
<?php endif ?>  
