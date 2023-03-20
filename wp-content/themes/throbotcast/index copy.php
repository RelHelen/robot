<?php
defined("ABSPATH") or die;
 get_header(); ?>
            <header class="main-header">
                <div class="layers">
                    <div class="layer__header">
                        <div class="layers__caption">Welcome to Parallax</div>
                        <div class="layers__title">Fairy Forest</div>
                    </div>
                    <div class="layer layers__base" 
                    style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/layer-base.png);"></div>
                    <div class="layer layers__middle" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/layer-middle.png);"></div>
                    <div class="layer layers__front" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/layer-front.png);"></div>
                </div>
            </header>

            <article class="main-article" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/dungeon.jpg);">
                <div class="main-article__content">
                    <h2 class="main-article__header">To be continued</h2>
                    <p class="main-article__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis error provident dignissimos facere. Repellendus tempore autem qui! Quia magnam tempora esse id necessitatibus corrupti mollitia expedita sapiente cum rerum, ut dicta laboriosam!</p>
                </div>
                <div class="copy">© WebDesign Master</div>
            </article>


            <section class="prod_main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Цикл WordPress -->
                     <!-- подключаем
                     content в папке  template-parts/content -->
                <?php get_template_part('template-parts/content')?>
                <?php endwhile; else : ?>
                    <!-- <p>Записей нет.</p> -->
                <?php endif; ?>               
            </section>
<?php get_footer(); ?>
