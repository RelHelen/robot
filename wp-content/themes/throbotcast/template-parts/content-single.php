<article class="post_single"> 
<?php 
//$my_filed = get_post_meta($post->ID);
//echo $post->ID;
 // var_dump($my_filed) ;
 //var_dump(get_post_format());
?> 
   
   <div class="block-posit-center"><h2 class="post_single_h2"><?php the_title() ?></h2> </div>
  
    <div class="post_single_thumb"><?php the_post_thumbnail('full') ?></div>
    <div class="container_"> 
          <div class="post_single-text">
                       
                 <?php the_content();                
                 ?>      
                 <!-- <table>
                    <tr>
                        <th>Модель</th>
                        <td>AVIC-16L</td>
                    </tr>
                    <tr>
                        <th>Колесная база</th>
                        <td>	1700 мм</td>
                    </tr>
                    <tr>
                        <th>Количество валов</th>
                        <td>6 осей</td>
                    </tr>
                    <tr>
                        <th>Размер с таблицей (за исключением пропеллера)</th>
                        <td>2350*2350*750 мм</td>
                    </tr>
                    <tr>
                        <th>Размер в сложенном виде (складывающаяся рука машины) </th>
                        <td>  (складывающаяся рука машины)	870*870*750 мм</td>
                    </tr>
                    <tr>
                        <th>Вес машины (без аккумулятора) </th>
                        <td> 19 кг, батарея: 6,3 кг</td>
                    </tr>
                    <tr>
                        <th>Объем бака  </th>
                        <td> 16L </td>
                    </tr>
                    <tr>
                        <th>Скорость полета </th>
                        <td>3-10 метров/сек </td>
                    </tr>
                    <tr>
                        <th>Эффективный диапазон сигнала </th>
                        <td> 	1 км</td>
                    </tr>
                    <tr>
                        <th>Максимальное время полета (без нагрузки) </th>
                        <td>20-25 мин </td>
                    </tr>
                    <tr>
                        <th>Максимальное время полета (полная нагрузка): </th>
                        <td>12-14 мин </td>
                    </tr>
                    <tr>
                        <th>Спецификация батареи </th>
                        <td>12S16000mah или 12S22000*1 шт </td>
                    </tr>
                    <tr>
                        <th>Время зарядки </th>
                        <td> 0,5-1 час</td>
                    </tr>
                    <tr>
                        <th>Циклы перезарядки </th>
                        <td>300-500 раз </td>
                    </tr>
                    <tr>
                        <th>Ежедневная эффективность (6 часов) </th>
                        <td>300-700acres </td>
                    </tr>
                 </table>  
             
        -->
       
                </div>
                  
        <div class="prod_main-category">
            <?php //the_category(' / ') 
            ?>
        </div>
    </div>
</article>  