<?php
//класс пользовательской части
//применятеся для постов 
class Rbtfunct_Public{
    public function __construct(){
         //при обновлении страницы админки добаляем текст в lo
         //file_put_contents(RBTFUNCT_PLUGIN_DIR.'log.txt',"!!!Public!!! \n",FILE_APPEND);
         //берем контент и возвращаем его
         add_filter('the_content',array($this,'filter_content'));
         add_action('wp_enqueue_scripts',array($this,'enqueue_style'));

 }  
 public function enqueue_style(){
    if( ! is_single()){
        // если находимся не внутри записи
        return;
    }
    wp_enqueue_style('rbtfunct',RBTFUNCT_PLUGIN_URL.'public/css/rbtfunct-public.css');
 }
 
 public function filter_content($content){
    if( ! is_single()){
        // если находимся не внутри записи
        return $content;
    }
    $data = Rbtfunct_Admin::get_content();
    $html =  $data['content'] ?? '';
    return $content ."<div class='rbtfunct-content'>". $html . "</div>";

 }
}